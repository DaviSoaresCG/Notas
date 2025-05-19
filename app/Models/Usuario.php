<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function notes()
    {
        //relacionamento 1:n  Sendo esta classe o 1
        return $this->hasMany(Note::class);
    }
}
