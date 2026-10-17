<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    protected $table = 'diskon';
    protected $primaryKey = 'diskon_id';

    protected $fillable = [
        'kode_diskon',
        'nama_diskon',
        'persentase',
        'tanggal_mulai',
        'tanggal_akhir',
        'status',
    ];
}
