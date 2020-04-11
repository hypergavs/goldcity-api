<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goldcity\Models\User;

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

    public function all()
    {
        return User::paginate();
    }
}
