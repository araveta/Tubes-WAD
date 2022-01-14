<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrapherProfile extends Model
{
    use HasFactory;
    protected $table = 'grapher_profiles';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'tmpt_lahir',
        'tgl_lahir',
        'tlp',
        'alamat',
        'foto',

    ];
}
