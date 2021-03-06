<?php

namespace Simpeg\Model;

use Illuminate\Database\Eloquent\Model;

class RiwayatPenghargaan extends Model
{
    protected $table = 'riwayat_penghargaan';

    protected $casts = [
        'features' => 'json'
    ];

    protected $fillable = [
    	'pegawai_id',
    	'nama_penghargaan',
    	'nomor_surat_keputusan',
    	'tanggal',
    	'nama_pemberi_penghargaan'
    ];
}
