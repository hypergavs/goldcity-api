<?php

namespace Goldcity\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'display_name', 'system_role', 'role_level', 'role_access'];

    protected $casts = [
        'role_access' => 'array'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
