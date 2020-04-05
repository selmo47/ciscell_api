<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cellule extends Model
{
    public function created_by() {
        return $this->belongsTo('User');
    }
}
