<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Goldcity\Models\Role;

class RolesController extends Controller
{
    public function getRoles()
    {
        return Role::all();
    }
}
