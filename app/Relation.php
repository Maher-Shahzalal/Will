<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    public function will()
    {
        return $this->belongsTo(Will::class);
    }

    public function media()
    {
        return $this->belongsTo(Media::class);
    }
}
