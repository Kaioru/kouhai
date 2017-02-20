<?php

namespace App\Transformers;

use App\Episode;
use League\Fractal\TransformerAbstract;

class EpisodeTransformer extends TransformerAbstract
{
    public function transform(Episode $episode)
    {
        return [
            'id' => (int) $episode->id,
            'production_id' => (int) $episode->production_id,
            'title' => (string) $episode->title,
        ];
    }
}
