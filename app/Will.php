<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Contact;
use App\Media;

class Will extends Model
{
    protected $fillable = ['name','content'];



    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function media()
    {
        return $this->hasMany(Relation::class);
    }
}
