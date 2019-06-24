<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecondModel extends Model
{
    protected $table="secondmodels";
    protected $fillable=['name','country','gender'];

    public function country()
    {
        return $this->belongsTo(countrylist::class)->withDefault(); /*creating relationship between the tables*/
    }
}
