<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menujenispenyakit extends Model
{
    protected $table = "menu_jenis_penyakit";
    protected $primaryKey = "id";
	protected $fillable = ['id', 'idJenisPenyakit', 'idMenu', 'idSuasanaHati', 'bobot'];

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
