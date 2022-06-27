<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Will;
use App\Contact;


class Media extends Model
{
    protected $fillable = ['name','image','voice','vedio'];

    public function will()
    {
        return $this->belongsTo(Will::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    
}
