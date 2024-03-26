<?php


namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Kurikulum extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'kurikulum';

    protected $fillable = [
        'idkurikulum',
        'Mata_Kuliah',
        'Jml_sks',
        'SA_1',
    ];

    protected $primaryKey = [
        'idkurikulum',
    ];

    public function Kurikulum() {
        return $this->belongsTo(Kurikulum::class);
    }

}
