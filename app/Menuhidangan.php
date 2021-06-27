<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menuhidangan extends Model
{
    protected $table = "menu_hidangan";
    protected $primaryKey = "id";
	protected $fillable = ['id', 'namaMenu', 'gambarMenu', 'keterangan', 'harga'];

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class, "idMenu", "id");
    }

    public function historys()
    {
        return $this->hasMany(HistoryPesanan::class, "idMenu", "id");
    }

    public function latih()
    {
        return $this->hasMany(Datalatih::class, "idMenu", "id");
    }
}
