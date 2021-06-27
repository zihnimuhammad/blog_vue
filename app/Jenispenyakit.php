<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenispenyakit extends Model
{
    protected $table = "jenis_penyakit";
    protected $primaryKey = "id";
	protected $fillable = ['id', 'namaJenisPenyakit'];

    public function latih()
    {
        return $this->hasMany(Datalatih::class,"idJenisPenyakit", "id");
    }
}
