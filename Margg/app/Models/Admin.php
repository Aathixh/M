<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'Admin_name',
        'Admin_email',
        'Admin_phn_num',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'Admin_password',
        'remember_token',
    ];

    // public function getAuthPassword()
    // {
    //     return $this->user_password;
    // }

    public function findForPassport($username)
    {
        return $this->where('Admin_email', $username)->first();
    }
}