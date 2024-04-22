<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'mata_kuliah';

    protected $fillable = [
        'Kode_MK',
        'Mata_Kuliah',
        'Jml_sks'
    ];
}
