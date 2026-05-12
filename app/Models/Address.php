<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'street',
        'neighborhood',
        'zip_code',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
