<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    
    public $timestamps = false;
    protected $fillable = ['zip', 'street', 'number', 'complement', 'neighborhood', 'city' , 'state'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
