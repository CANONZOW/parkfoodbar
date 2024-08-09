<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Driver extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_driver',
        'foto_driver', 
        'no_hp', 
        'no_plat',
        'tipe_kendaraan',

    ];

    public function getFotoDriverAttribute($foto_driver)
    {
        return config('app.url') . Storage::url($foto_driver);
    }

  
    
}
