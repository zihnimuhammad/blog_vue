<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suasanahati extends Model
{
    protected $table = "suasana_hati";
    protected $primaryKey = "id";
	protected $fillable = ['id', 'namaSuasanaHati'];

    public function latih()
    {
        return $this->hasMany(Datalatih::class, "idSuasanaHati", "id");
    }
}
