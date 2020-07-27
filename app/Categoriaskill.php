<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoriaskill extends Model
{
    protected $fillable = ['nombre'];

    public function nuestrosskills()
    {
        return $this->hasMany(Nuestrosskill::class, 'categoriaskills_id' );
    }
}
