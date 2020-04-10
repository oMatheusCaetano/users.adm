<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    public $timestamps = false;
    protected $fillable = ['name', 'cpf', 'email', 'password', 'address_id'];

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
