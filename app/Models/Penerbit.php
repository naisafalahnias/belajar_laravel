<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_penerbit'];
    public $timestamp = true;

    // relasi ke tabel 
    public function penerbit()
    {
        return $this->hasMany(Penerbit::class);
    }
}
