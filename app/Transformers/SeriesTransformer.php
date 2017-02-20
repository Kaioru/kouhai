<?php

namespace App\Transformers;

use App\Series;
use League\Fractal\TransformerAbstract;

class SeriesTransformer extends TransformerAbstract
{
    public function transform(Series $series)
    {
        return [
            'id' => (int) $series->id,
            'title' => (string) $series->title,
        ];
    }
}
