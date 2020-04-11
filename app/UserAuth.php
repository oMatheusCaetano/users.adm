<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserAuth extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $fillable = ['name', 'cpf', 'email', 'password', 'address_id'];
    protected $hidden = ['password', 'remember_token',];
    protected $casts = ['email_verified_at' => 'datetime',];
    public $timestamps = false;
}
