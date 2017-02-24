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
			'created_by' => (int) $model->created_by,
        ];
    }
}
