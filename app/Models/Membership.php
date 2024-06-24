<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'number_card',
        'date_of_registration',
        'full_name',
        'nickname',
        'date_of_birth',
        'gender',
        'phone',
        'job',
        'date_expired',

    ];

    public function member()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    // public function getDateOfRegistrationAttribute()
    // {
    //     return Carbon::parse($this->attributes['date_of_registration'])
    //         ->isoFormat(' DD MMMM Y');
    // }

    // public function getDateExpiredAttribute()
    // {
    //     return Carbon::parse($this->attributes['date_expired'])
    //         ->isoFormat(' DD MMMM Y');
    // }
}
