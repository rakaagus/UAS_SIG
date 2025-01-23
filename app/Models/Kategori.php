<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $fillable = [
        'nama'
    ];

    public function namaData()
    {
        return $this->hasMany(NamaData::class, 'kategori_id');
    }
}
