<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relations extends Model
{
    use HasFactory;
    protected $table = 'relations';
    protected $fillable = [
        'mahasiswa_npm' => "2201170025",
        'dosen_nidn' => "1234567",
        'matakuliah_kode' => '545454',
        'status_aktif' => 'Y',
	];

}
