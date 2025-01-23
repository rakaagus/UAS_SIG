<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NamaData extends Model
{
    //
    use HasFactory;

    protected $table = 'nama_data';

    protected $fillable = [
        'name',
        'kategori_id',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function dataProvinsi()
    {
        return $this->hasMany(DataProvinsi::class, 'nama_data_id');
    }

    public function dataKabkota()
    {
        return $this->hasMany(DataKabkota::class, 'nama_data_id');
    }
}
