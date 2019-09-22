<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Date;

/**
 * @property string identifier
 * @property string license
 * @property string name
 * @property array identifiers
 * @property boolean staff
 * @property Date seen
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
        'identifier', 'license', 'name', 'identifiers', 'staff', 'playtime', 'seen',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'identifiers' => 'array',
        'staff'       => 'boolean',
        'seen'        => 'date',
    ];

    /**
     * Gets all the characters.
     *
     * @return HasMany
     */
    public function characters() : HasMany
    {
        return $this->hasMany(Character::class, 'identifier', 'identifier');
    }

}
