<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['id','genre'];
    public $timestamp = true;

    // relasi ke tabel 
    public function penerbit()
    {
        return $this->hasMany(Genre::class);
    }
}
