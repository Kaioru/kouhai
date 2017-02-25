<?php

namespace App\Transformers;

use App\Cast;

class CastTransformer extends Transformer
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

    public function transform(Cast $model)
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
    public function includeProductions(Cast $model)
    {
        $include = $model->productions;
        return $include
            ? $this->collection($include, new ProductionCastTransformer)
            : $this->null();
    }
}
