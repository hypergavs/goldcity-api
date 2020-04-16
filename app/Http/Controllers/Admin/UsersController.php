<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goldcity\Models\User;
use App\Http\Requests\CreateUserRequest;

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
        $user = User::create($request);
        return $user;
    }
}
