<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
      
        'transactions_id',
        'users_id', 
        'foto_1', 
        'keterangan',
      
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }

    public function getFoto1Attribute($foto_1)
    {
        return config('app.url') . Storage::url($foto_1);
    }
}
