<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    
    
    protected $fillable = [
        'name_lastname',
        'email',
        'password',
        'activation_key',
        'active'
    ];

    
    protected $hidden = [
        'password',
        'activation_key'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
