<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'id_order',
        'nama_foto',
        'foto',
    ];
}
