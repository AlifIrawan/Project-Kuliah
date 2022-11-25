<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
