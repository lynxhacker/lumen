<?php

namespace App\Api\V1\Controllers; 

use App\Api\V1\Models\Collections;
use App\Api\V1\Transformers\CollectionsTransformer; 

class ArticleController extends ApiController
{
	public function index()
	{
		//looping through articles
		$articles = App\Api\V1\Models\Collections::find(1)->articles;

		foreach ($articles as $article) {
			echo $article->title;
		}

		//retrieve specific items using query builder
		$articles = App\Api\V1\Models\Collections::find(1)->articles->where('title', 'First articlce')->first(); 

		//inverse relationship
		echo App\Api\V1\Models\Article::find(1)->collection->type; 
	}
}