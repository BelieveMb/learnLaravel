<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use BasementChat\Basement\Contracts\User as BasementUserContract;
use BasementChat\Basement\Traits\HasPrivateMessages;

// class User extends Authenticatable
// {
class User extends Authenticatable implements BasementUserContract
{
    use HasPrivateMessages;
    use HasApiTokens, HasFactory, Notifiable;

   
    protected $fillable = [
        'name',
        'email',
        'password',
        'message',
    ];//signifie que l'on peut mettre des données dans la table User et 


    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function chirps(): HasMany
    {
        return $this->hasMany(Chirp::class);
    }
}
