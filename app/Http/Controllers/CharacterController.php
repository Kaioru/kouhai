<?php

namespace App\Http\Controllers;

use App\Character;
use App\Transformers\CharacterTransformer;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Eloquent model.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    protected function model()
    {
        return new Character;
    }

    /**
     * Transformer for the current model.
     *
     * @return \League\Fractal\TransformerAbstract
     */
    protected function transformer()
    {
        return new CharacterTransformer;
    }
}
