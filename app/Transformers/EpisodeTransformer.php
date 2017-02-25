<?php

namespace App\Transformers;

use App\Episode;
use League\Fractal\TransformerAbstract;

class EpisodeTransformer extends TransformerAbstract
{
	/**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $availableIncludes = [
		'production',
        'creator',
        'updater',
    ];

    public function transform(Episode $model)
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
     * @param Episode $model
     * @return \League\Fractal\Resource\Item
     */
    public function includeProduction(Episode $model)
    {
		$include = $model->production;
        return $include
	        ? $this->item($include, new EpisodeTransformer)
	        : $this->null();
    }

    /**
     * Include Creator
     *
     * @param Episode $model
     * @return \League\Fractal\Resource\Item
     */
    public function includeCreator(Episode $model)
    {
		$include = $model->creator;
        return $include
	        ? $this->item($include, new UserTransformer)
	        : $this->null();
    }

    /**
     * Include Creator
     *
     * @param Episode $model
     * @return \League\Fractal\Resource\Item
     */
    public function includeUpdater(Episode $model)
    {
        $include = $model->updater;
        return $include
	        ? $this->item($include, new UserTransformer)
	        : $this->null();
    }
}
