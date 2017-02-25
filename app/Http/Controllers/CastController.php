<?php

namespace App\Http\Controllers;

use App\Cast;
use App\Transformers\CastTransformer;
use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Eloquent model.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    protected function model()
    {
        return new Cast;
    }

    /**
     * Transformer for the current model.
     *
     * @return \League\Fractal\TransformerAbstract
     */
    protected function transformer()
    {
        return new CastTransformer;
    }
}
