<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //panggil dulu tabelnya
    protected $table = 'barangs';

    //kita tantukan kolom yang boleh di isi atau tidak boleh di isi
    protected $guarded = [
        'id',
        'timestamps'
    ];
}
