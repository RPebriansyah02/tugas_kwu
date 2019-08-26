<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['nama','kelas','jurusan','tempat_lahir','tanggal_lahir','agama','jenis_kelamin','telepon','alamat'];
}
