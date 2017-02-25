<?php

namespace App\Transformers;

use App\Cast;

class CastCharacterTransformer extends CastTransformer
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'character'
    ];

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $availableIncludes = [
        'creator',
        'updater',
    ];

    /**
     * Include CastCharacter
     *
     * @param Production $model
     * @return \League\Fractal\Resource\Item
     */
    public function includeCharacter(Cast $model)
    {
        $include = \App\Character::find($model->pivot->character_id);
        return $include
            ? $this->item($include, new CharacterTransformer)
            : $this->null();
    }
}
