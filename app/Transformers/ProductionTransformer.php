<?php

namespace App\Transformers;

use App\Production;
use League\Fractal\TransformerAbstract;

class ProductionTransformer extends TransformerAbstract
{
    public function transform(Production $production)
    {
        return [
            'id' => (int) $production->id,
			'series_id' => (int) $production->series_id,
            'title' => (string) $production->title,
        ];
    }
}
