<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'code',
        'id_user',
        'id_grapher',
        'id_layanan',
        'tgl_kerja',
        'waktu_kerja',
        'lokasi',
        'keterangan',
        'harga_order',
        'tarif_grapher',
        'laba',
        'status_order',
    ];

    public function ambildata($id,$hasil)
    {
        $q = DB::where('id',$id)->get();
        foreach($q as $dt):
            return $dt[$hasil];
        endforeach;
    }
}
