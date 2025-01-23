<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Datakabkota extends Model
{
    //
    use HasFactory;

    protected $table = 'data_kabkota';

    protected $fillable = [
        'tahun',
        'nama_data_id',
        'kabkota_id',
        'jumlah',
    ];

    public function kabkota()
    {
        return $this->belongsTo(Kabkota::class, 'kabkota_id');
    }

    public function namaData()
    {
        return $this->belongsTo(NamaData::class, 'nama_data_id');
    }
}
