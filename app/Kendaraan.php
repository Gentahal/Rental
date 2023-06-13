<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $guarded = [];
    protected $table = 'kendaraan';
    protected $fillable = ['jenis', 'nama_kendaraan', 'warna', 'deskripsi', 'tahun', 'foto', 'tarif'];
}