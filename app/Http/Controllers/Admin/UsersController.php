<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goldcity\Models\User;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UsersController extends Controller
{
    public function me()
    {
        $user = auth()->user();
        $user->tokens()
            ->where('id', '!=', $user->latest_token->id)
            ->delete();

        return $user;
    }

    public function listAllWithPagination(Request $request)
    {
        $user = new User;

        $searchText = $request->get('search', '');
        if (! empty($searchText)) {
            $user = $user->where('first_name', 'like', '%' . $searchText . '%')
                ->orWhere('last_name', 'like', '%' . $searchText . '%');
        }

        // Check if user is not admin or cashbee admin ....
        // if not ... get only users that this user subordinates ...
        // if (! in_array(auth()->user()->role->name, ['admin', 'goldcity_super_admin'])) {
        //     $userId = auth()->user()->id;
        //     $user = $user->where('parent_id', $userId)
        //         ->orWhere('id', $userId);
        // }

        // $user = $user->whereHas('role', function ($query) {
        //     return $query->where('name', '!=', 'user');
        // });

        return $user->orderBy($request->get('order_by', 'created_at'), $request->get('sort_direction', 'desc'))
            ->paginate($request->get('rows_per_page', 10));
    }

    public function createUser(CreateUserRequest $request)
    {
        $request = $request->except('password2');
        $request['password'] = \bcrypt($request['password']);
        $user = User::create($request);
        return $user;
    }

    public function updateUser(UpdateUserRequest $request, User $user)
    {
        $password_update = false;
        if ($request->get('password')) {
            $new_password['password']= \bcrypt($request->get('password'));
            $password_update = true;
        }

        $not_unique = User::where(function ($query) use ($user, $request) {
            $query->where('email', $request->get('email'))
                ->orWhere('username', $request->get('username'));
        })->where('id', '!=', $user->id)->count();

        if ($not_unique) {
            return response()->json("Username or Email is already taken!", 422);
        }

        $request = $request->only([
            'first_name', 'middle_name', 'last_name', 'email', 'username', 'role_id', 'pincode'
        ]);

        $request = $password_update ? array_merge($request, $new_password) : $request;
            
        $user->fill($request);
        $user->save();

        return $user;
    }
}
