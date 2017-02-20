<?php

namespace App\Transformers;

use App\Episode;
use League\Fractal\TransformerAbstract;

class EpisodeTransformer extends TransformerAbstract
{
    public function transform(Episode $model)
    {
        return [
            'id' => (int) $model->id,
            'production_id' => (int) $model->production_id,
            'title' => (string) $model->title,
			'description' => (string) $model->description,
        ];
    }
}
