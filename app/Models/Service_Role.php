<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service_Role extends Model
{
    protected $table = 'roles_services';

    protected $fillable = [
        'role_id',
        'service_id'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
