<?php


namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class PollingDetail extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'polling_detail';

    protected $fillable = [
        'idpolling_detail',
        'Kode_MK',
        'Mata_Kuliah',
        'Jml_Mahasiswa',
        'Jadwal_MK',
        'Jml_sks',
        'user_iduser',
    ];

    protected $primaryKey = [
        'idpolling',
    ];

    public function PollingDetail() {
        return $this->belongsTo(PollingDetail::class);
    }
}
