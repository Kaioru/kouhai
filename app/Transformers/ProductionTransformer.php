<?php

namespace App\Transformers;

use App\Production;
use League\Fractal\TransformerAbstract;

class ProductionTransformer extends TransformerAbstract
{
    public function transform(Production $model)
    {
        return [
            'id' => (int) $model->id,
			'series_id' => (int) $model->series_id,
            'title' => (string) $model->title,
			'description' => (string) $model->description,
			'creator_id' => (int) $model->creator_id,
			'updater_id' => (int) $model->updater_id,
			'created_at' => (string) $model->created_at,
			'updated_at' => (string) $model->updated_at,
        ];
    }
}
