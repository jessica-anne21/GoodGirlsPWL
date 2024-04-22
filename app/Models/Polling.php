<?php


namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Polling extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'polling';

    protected $fillable = [
        'idpolling',
        'Start_time',
        'End_time',
    ];

    protected $primaryKey = [
        'idpolling',
    ];

    public function Polling() {
        return $this->belongsTo(Polling::class);
    }
}
