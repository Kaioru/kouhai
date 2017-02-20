<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Transformers\EpisodeTransformer;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    /**
   * Eloquent model.
   *
   * @return \Illuminate\Database\Eloquent\Model
   */
  protected function model()
  {
      return new Episode;
  }

  /**
   * Transformer for the current model.
   *
   * @return \League\Fractal\TransformerAbstract
   */
  protected function transformer()
  {
      return new EpisodeTransformer;
  }
}
