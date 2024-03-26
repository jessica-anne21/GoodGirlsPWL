<?php


namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Role extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'role';

    protected $fillable = [
        'idrole',
        'Mahasiswa',
        'Admin',
        'Program_Studi',
    ];

    protected $primaryKey = [
        'idrole',
    ];

    public function Role() {
        return $this->belongsTo(Role::class);
    }
}
