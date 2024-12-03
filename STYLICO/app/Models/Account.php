<?php

namespace App\Models;

<<<<<<< HEAD:STYLICO/app/Models/Account.php
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> 4b8593f0797d8c0850d071063da5289dc3627b37:STYLICO/app/Models/User.php
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

<<<<<<< HEAD:STYLICO/app/Models/Account.php
class Account extends Model
{
    use HasFactory;

    protected $table = "account";
=======
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
>>>>>>> 4b8593f0797d8c0850d071063da5289dc3627b37:STYLICO/app/Models/User.php

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
