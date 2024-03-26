<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'iduser',
        'nama',
        'password',
        'jenis_kelamin',
        'tanggal_lahir',
        'agama',
        'alamat',
        'NRP'
    ];

    protected $primaryKey = [
        'iduser',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function getFullNameAttribute(): string
    {
        return $this->nama;
    }


    public function getAgeAttribute(): ?int
    {
        if ($this->tanggal_lahir) {
            return now()->diffInYears($this->tanggal_lahir);
        }

        return null;
    }

    /**
     * Check if the user is an admin.
     *
     * @return bool
     */
    public function isAdmin(): bool
    {
        // Logic to check if the user is an admin, for example, based on a role or flag in the database
        return $this->role === 'admin';
    }
}
