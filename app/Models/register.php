<?php

namespace App\Models;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;

    protected $table = 'user';

    protected $fillable = [
        'iduser',
        'nama',
        'password',
        'jenis_kelamin',
        'tanggal_lahir',
        'agama',
        'alamat',
        'NRP',
    ];
}


