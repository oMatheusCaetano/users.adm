<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    
    public $timestamps = false;
    protected $table = 'address';
    protected $fillable = ['street', 'city', 'state', 'number', 'neighborhood', 'zip', 'complement'];
}
