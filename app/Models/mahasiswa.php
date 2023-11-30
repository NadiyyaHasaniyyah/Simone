<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class mahasiswa extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    // protected $fillable = ['nama', 'angkatan', 'dsn_id', 'email', 'password', 'remember_token', 'created_at', 'updated_at'];
    protected $guarded = [
        'nim',
    ];

    // protected $fillable = ['foto', 'nama', 'email', 'provinsi', 'kabupaten', 'status', 'fakultas', 'departemen', 'jalur_masuk', 'alamat'];

    protected $table = 'mahasiswas';

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'password' => 'hashed',
    ];

    public function dosenwali(){
        return $this->belongsTo(dosenwali::class);
    }

    // In mahasiswa model
    public function pkls()
    {
        return $this->hasOne(Pkl::class, 'mhs_id');
    }
}


