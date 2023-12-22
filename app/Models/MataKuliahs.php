<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliahs extends Model
{
    use HasFactory;
    protected $table = 'matakuliahs';
    protected $fillable = [
        'kode_mk' => "545454",
        'nama_mk' => 'Mobile Computing',
        'sks' => '3',
        'semester' => 'ganjil',
		];
}
