<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps= false;

    public function getNameAttribute($value)
    {
        return ucfirst($value);   //For->accessor


    }


    public function setNameAttribute($value)
    {
        //$this->attributes['name'] = strtolower($value);

         $this->attributes['name'] = 'Mr .' .($value);
    }

    public function getAddressAttribute($value)
    {
        return $value. ', UP INDIA';
    }


     public function setAddressAttribute($value)
    {
        //$this->attributes['name'] = strtolower($value);

         $this->attributes['address'] = ($value) . 'UP-INDIA';
    }


}
