<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
  use Helpers;

  /**
   * Eloquent model instance.
   *
   * @var \Illuminate\Database\Eloquent\Model;
   */
  protected $model;
  /**
   * Fractal Transformer instance.
   *
   * @var \League\Fractal\TransformerAbstract
   */
  protected $transformer;

  /**
   * Constructor.
   *
   * @param Request $request
   */
  public function __construct(Request $request)
  {
      $this->model = $this->model();
      $this->transformer = $this->transformer();
  }

  /**
   * Eloquent model.
   *
   * @return \Illuminate\Database\Eloquent\Model
   */
  abstract protected function model();
  /**
   * Transformer for the current model.
   *
   * @return \League\Fractal\TransformerAbstract
   */
  abstract protected function transformer();

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $models = $this->model->paginate(25);
      $transformer = $this->transformer;
      return $this->response->paginator($models, $transformer);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $model = find($id);
      $transformer = $this->transformer;
      return $this->response->item($model, $transformer);
  }

  /**
   * Finds the specified resource.
   * @param int $id
   * @return \Illuminate\Database\Eloquent\Model
   */
  public function find($id)
  {
      return $this->model->findOrFail($id);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }
}
