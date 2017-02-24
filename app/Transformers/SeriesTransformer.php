<?php

namespace App\Transformers;

use App\Series;
use League\Fractal\TransformerAbstract;

class SeriesTransformer extends TransformerAbstract
{
    public function transform(Series $model)
    {
        return [
            'id' => (int) $model->id,
            'title' => (string) $model->title,
			'description' => (string) $model->description,
			'creator_id' => (int) $model->creator_id,
			'updater_id' => (int) $model->updater_id,
			'created_at' => (string) $model->created_at,
			'updated_at' => (string) $model->updated_at,
        ];
    }
}
