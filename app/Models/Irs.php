<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Irs extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $table = 'irs';

    public function mahasiswa(){
        return $this->belongsTo(mahasiswa::class);
    }

}
