<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khs extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $table = 'khs';

    public function mahasiswa(){
        return $this->belongsTo(mahasiswa::class);
    }

}
