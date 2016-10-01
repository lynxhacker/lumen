<?php

namespace App\Api\V1\Controllers; 

use App\Api\V1\Models\Collections;
use App\Api\V1\Transformers\CollectionsTransformer; 

class CollectionsController extends ApiController
{
	public function show()
	{
		$collections = Collections::all();  

        return $this->response->collection($collections, new CollectionsTransformer);
	}

	public function showCollection($id)
	{
		$collection = Collections::findOrFail($id);

		return $this->response->item($collection, new CollectionsTransformer);	
	}
}