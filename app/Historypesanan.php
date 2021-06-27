<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historypesanan extends Model
{
    protected $table = "pesanan";
    protected $primaryKey = "id";
	protected $fillable = ['id', 'idMenu', 'idPengguna', 'tanggalPesan', 'jumlahPesan', 'harga', 'totalharga', 'orderno', 'mejano']; 

    public function users()
    {
        return $this->belongsTo(User::class, "idPengguna", "id");
    }

    public function menus()
    {
        return $this->belongsTo(Menuhidangan::class, "idMenu", "id");
    }
}
