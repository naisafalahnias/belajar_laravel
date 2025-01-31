<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['id','name_customer','gender','contact'];
    public $timestamp = true;

    // relasi ke tabel telepon
    public function product()
    {
        return $this->hasMany(Customer::class);
    }
}
