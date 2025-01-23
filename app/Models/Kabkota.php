<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kabkota extends Model
{
    //
    use HasFactory;
    protected $table = 'kabkota';
    protected $fillable = ['name', 'alt_name', 'latitude', 'longitude', 'provinsi_id'];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }

    public function dataKabkotas()
    {
        return $this->hasMany(DataKabkota::class, 'kabkota_id');
    }
}
