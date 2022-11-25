<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'status'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function pencatatan()
    {
        return $this->hasMany(Pencatatan::class);
    }
}
