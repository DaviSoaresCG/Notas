<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function users()
    {
        //percence ao relacionamento de 1:n sendo esta classe n
        return $this->belongsTo(Note::class);
    }
}
