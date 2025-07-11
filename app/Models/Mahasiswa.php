<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public function dosens(){
        return $this->hasOne(Dosen::class, 'id', 'dosens_id');
    }

    public function jurusans(){
        return $this->hasOne(Jurusan::class, 'id', 'jurusans_id');
    }
}
