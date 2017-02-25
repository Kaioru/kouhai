<?php

namespace App\Transformers;

use App\Series;
use League\Fractal\TransformerAbstract;

class SeriesTransformer extends TransformerAbstract
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

    public function transform(Series $model)
    {
        return [
            'id' => (int) $model->id,
            'title' => (string) $model->title,
			'description' => (string) $model->description,
        ];
    }

	/**
     * Include Episode
     *
     * @param Series $model
     * @return \League\Fractal\Resource\Item
     */
    public function includeProductions(Series $model)
    {
		$include = $model->productions;
        return $include
	        ? $this->collection($include, new ProductionTransformer)
	        : $this->null();
    }

    /**
     * Include Creator
     *
     * @param Series $model
     * @return \League\Fractal\Resource\Item
     */
    public function includeCreator(Series $model)
    {
		$include = $model->creator;
        return $include
	        ? $this->item($include, new UserTransformer)
	        : $this->null();
    }

    /**
     * Include Creator
     *
     * @param Series $model
     * @return \League\Fractal\Resource\Item
     */
    public function includeUpdater(Series $model)
    {
        $include = $model->updater;
        return $include
	        ? $this->item($include, new UserTransformer)
	        : $this->null();
    }
}
