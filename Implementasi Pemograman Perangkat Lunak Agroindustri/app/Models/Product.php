<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'recommendation'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }

    public function pencatatan()
    {
        return $this->hasMany(Pencatatan::class);
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class);
    }
}
