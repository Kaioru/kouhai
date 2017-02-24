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
			'creator_id' => (int) $model->creator_id,
			'updater_id' => (int) $model->updater_id,
			'created_at' => (string) $model->created_at,
			'updated_at' => (string) $model->updated_at,
        ];
    }
}
