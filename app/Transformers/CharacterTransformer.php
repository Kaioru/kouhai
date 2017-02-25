<?php

namespace App\Transformers;

use App\Character;

class CharacterTransformer extends Transformer
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $availableIncludes = [
        'productions',
        'creator',
        'updater',
    ];

    public function transform(Character $model)
    {
        return [
            'id' => (int) $model->id,
            'name' => (string) $model->name,
        ];
    }

    /**
     * Include Production
     *
     * @param Production $model
     * @return \League\Fractal\Resource\Item
     */
    public function includeProductions(Character $model)
    {
        $include = $model->productions;
        return $include
            ? $this->collection($include, new ProductionCharacterTransformer)
            : $this->null();
    }
}
