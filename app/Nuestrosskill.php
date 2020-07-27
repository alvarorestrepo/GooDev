<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nuestrosskill extends Model
{
    protected $fillable =['nombre','descripcion','imagen','categoriaskills_id'];

    public function categoriaskills()
    {
        return $this->belongsTo(Categoriaskill::class);
    }
}
