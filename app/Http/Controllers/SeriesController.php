<?php

namespace App\Http\Controllers;

use App\Series;
use App\Transformers\SeriesTransformer;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
   * Eloquent model.
   *
   * @return \Illuminate\Database\Eloquent\Model
   */
  protected function model()
  {
      return new Series;
  }

  /**
   * Transformer for the current model.
   *
   * @return \League\Fractal\TransformerAbstract
   */
  protected function transformer()
  {
      return new SeriesTransformer;
  }
}
