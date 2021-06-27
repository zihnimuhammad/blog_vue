<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datalatih extends Model
{
    protected $table = "data_latih";
    protected $primaryKey = "id";
	protected $fillable = ['id', 'idJenisPenyakit', 'idSuasanaHati', 'idMenu', 'nilaiBobotLatig']; 

    public function jenis()
    {
        return $this->belongsTo(Jenispenyakit::class, "idJenisPenyakit", "id");
    }

    public function suasana()
    {
        return $this->belongsTo(Suasanahati::class, "idSuasanaHati", "id");
    }

    public function menus()
    {
        return $this->belongsTo(Menuhidangan::class, "idMenu", "id");
    }
}
