<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswas extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'npm' => "2201170025",
        'nama' => 'Hayati Ikhwani',
        'alamat' => 'Pasaman Barat',
        'no_hp' => '085658579740',
    ];
}
