<?php

namespace App\Transformers;

use App\Episode;

class EpisodeTransformer extends Transformer
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
}
