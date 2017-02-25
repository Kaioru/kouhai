<?php

namespace App\Transformers;

use App\Production;

class ProductionTransformer extends Transformer
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $availableIncludes = [
        'series',
        'episodes',
        'creator',
        'updater',
    ];

    public function transform(Production $model)
    {
        return [
            'id' => (int) $model->id,
            'title' => (string) $model->title,
            'description' => (string) $model->description
        ];
    }

    /**
     * Include Series
     *
     * @param Production $model
     * @return \League\Fractal\Resource\Item
     */
    public function includeSeries(Production $model)
    {
        $include = $model->series;
        return $include
            ? $this->item($include, new SeriesTransformer)
            : $this->null();
    }

    /**
     * Include Episode
     *
     * @param Production $model
     * @return \League\Fractal\Resource\Item
     */
    public function includeEpisodes(Production $model)
    {
        $include = $model->episodes;
        return $include
            ? $this->collection($include, new EpisodeTransformer)
            : $this->null();
    }
}
