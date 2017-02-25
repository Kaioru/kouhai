<?php

namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use League\Fractal\TransformerAbstract;

abstract class Transformer extends TransformerAbstract
{
	/**
	 * Include Creator
	 *
	 * @param Model $model
	 * @return \League\Fractal\Resource\Item
	 */
	public function includeCreator(Model $model)
	{
		$include = $model->creator;
		return $include
			? $this->item($include, new UserTransformer)
			: $this->null();
	}

	/**
	 * Include Creator
	 *
	 * @param Model $model
	 * @return \League\Fractal\Resource\Item
	 */
	public function includeUpdater(Model $model)
	{
		$include = $model->updater;
		return $include
			? $this->item($include, new UserTransformer)
			: $this->null();
	}
}
