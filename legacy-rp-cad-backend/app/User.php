<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property string account_id
 * @property string identifier
 * @property string name
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id', 'name', 'avatar', 'api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
    ];

    /**
     * Gets the identifier, which is a HEX version of the account id with a "steam:" prefix. Used as a way of
     * identifying players on the game-server.
     *
     * @return string
     */
    protected function getIdentifierAttribute()
    {
        return 'steam:' . dechex($this->account_id);
    }

    /**
     * Gets the user's player on the game-server.
     *
     * @return HasOne
     */
    public function player()
    {
        return $this->hasOne(Player::class, 'identifier', 'identifier');
    }

}
