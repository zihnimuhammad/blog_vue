<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menusuasanahati extends Model
{
    protected $table = "menu_suasana_hati";
    protected $primaryKey = "id";
	protected $fillable = ['id', 'idSuasanaHati', 'idMenu'];
}
