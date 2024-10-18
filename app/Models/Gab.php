<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Gab extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'clinic_id',
        'path',
        'status',
    ];

    public function patient_id(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function clinic_id(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
