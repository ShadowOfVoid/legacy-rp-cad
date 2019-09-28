<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property Character character
 * @property string name
 * @property string plate
 * @property string hash
 * @property string garage
 * @property string state
 * @property array damage
 * @property array modifications
 * @property boolean supporter
 * @property float fuel
 */
class Car extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'characters_cars';

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
        'cid', 'name', 'plate', 'hash', 'garage', 'state', 'damage', 'modifications', 'fuel', 'supporter',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'damage'        => 'array',
        'modifications' => 'array',
        'fuel'          => 'float',
        'supporter'     => 'boolean',
    ];

    /**
     * Gets the character that owns the car.
     *
     * @return BelongsTo
     */
    protected function character() : BelongsTo
    {
        return $this->belongsTo(Character::class, 'cid');
    }

}
