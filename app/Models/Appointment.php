<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'patient_id',
        'provider_id',
        'scheduled_by',
        'service_id',
        'notes',
        'scheduled_at',
        'status',
    ];

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }
    public function scheduler()
    {
        return $this->belongsTo(User::class, 'scheduled_by');
    }
}
