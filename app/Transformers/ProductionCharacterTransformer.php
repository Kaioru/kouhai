<?php

namespace App\Transformers;

use App\Production;

class ProductionCharacterTransformer extends ProductionTransformer
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'cast'
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
     * Include Cast
     *
     * @param Production $model
     * @return \League\Fractal\Resource\Item
     */
    public function includeCast(Production $model)
    {
        $include = \App\Cast::find($model->pivot->cast_id);
        return $include
            ? $this->item($include, new CastTransformer)
            : $this->null();
    }
}
