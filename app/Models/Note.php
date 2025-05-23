<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{

    // se eu usar a função delete(), utilizar o deleted_at
    use SoftDeletes;

    public function users()
    {
        //percence ao relacionamento de 1:n sendo esta classe n
        return $this->belongsTo(Note::class);
    }
}
