<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_layanan',
        'tarif',
        'deskripsi',
        'cover',
        'status',
    ];
}
