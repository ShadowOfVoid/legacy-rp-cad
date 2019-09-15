<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string identifier
 * @property string name
 */
class Player extends Model
{

    /**
     * Whether to use timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identifier', 'name',
    ];

    /**
     * Gets all the characters.
     *
     * @return HasMany
     */
    public function characters()
    {
        return $this->hasMany(Character::class, 'identifier', 'identifier');
    }

}
