<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Will;
use App\Media;

class Contact extends Model
{
    protected $fillable = ['code','number','name','emaill','will_id','media_id','user_id'];

    public function will()
    {
        return $this->belongsTo(Will::class);
    }

    public function media()
    {
        return $this->belongsTo(Mefdia::class);
    }


   
}