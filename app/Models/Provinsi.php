<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = 'provinsi';
    protected $fillable = ['name', 'alt_name', 'latitude', 'longitude'];
    //

    public function kabkotas()
    {
        return $this->hasMany(Kabkota::class, 'provinsi_id');
    }

    public function dataProvinsis()
    {
        return $this->hasMany(DataProvinsi::class, 'provinsi_id');
    }
}
