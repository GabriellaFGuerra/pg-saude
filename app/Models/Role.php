<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'role'
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'roles_services');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
