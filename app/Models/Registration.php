<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registration extends Model
{
    /** @use HasFactory<\Database\Factories\RegistrationFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vaccine_center_id',
        'date',
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function vaccineCenter():BelongsTo{
        return $this->belongsTo(vaccineCenter::class);
    }
}
