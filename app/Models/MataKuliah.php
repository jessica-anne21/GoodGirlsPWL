<?php


namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class MataKuliah extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'mata_kuliah';

    protected $fillable = [
        'idmata_kuliah',
        'Mata_Kuliah',
        'Kode_MK',
        'Jml_sks',
        'Jadwal_MK',
        'Prasyarat_MK',
    ];

    protected $primaryKey = [
        'idmata_kuliah',
    ];

    public function MataKuliah() {
        return $this->belongsTo(MataKuliah::class);
    }


}
