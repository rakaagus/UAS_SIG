<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataProvinsi extends Model
{
    //
    use HasFactory;

    protected $table = 'data_provinsi';

    protected $fillable = [
        'tahun',
        'provinsi_id',
        'nama_data_id',
        'jumlah',
        'tanggal',
    ];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }

    public function namaData()
    {
        return $this->belongsTo(NamaData::class, 'nama_data_id');
    }
}
