<?php

namespace App\Models\Auth\admins;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class SuperAdmin extends Authenticatable
{
    //super admin of bureau d'order
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'fullname',
        'CIN',
        'username',
        'email',
        'password',
        'image_profile',
        'image_url'
    ];
}
