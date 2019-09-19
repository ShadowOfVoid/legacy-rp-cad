<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Date;

/**
 * @property Date expires_at
 * @property boolean processed
 * @property boolean active
 */
class Warrant extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'issuer_id', 'processed', 'expires_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'processed'  => 'boolean',
        'expires_at' => 'date',
    ];

    /**
     * Gets whether the warrant is active.
     *
     * @return bool
     */
    protected function getActiveAttribute()
    {
        return !($this->hasExpired() || $this->processed);
    }

    /**
     * Gets whether the warrant has expired or not.
     *
     * @return bool
     */
    public function hasExpired()
    {
        return Date::now()->isAfter($this->expires_at);
    }

    /**
     * Gets the target character of this warrant.
     *
     * @return BelongsTo
     */
    protected function character()
    {
        return $this->belongsTo(Character::class);
    }

    /**
     * Gets issuer of the warrant.
     *
     * @return BelongsTo
     */
    protected function issuer()
    {
        return $this->belongsTo(Player::class);
    }

}
