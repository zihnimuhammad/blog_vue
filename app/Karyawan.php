<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = "karyawan";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama', 'jabatan', 'jenis_kelamin', 'tanggal_lahir', 'no_hp', 'email', 'password', 'alamat'];
}
