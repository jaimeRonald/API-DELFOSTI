<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\Filtrer_Article;
use Illuminate\Routing\Controller;

class ArticleCategoryController extends Controller
{

		public function share(Request $req){// aqui ingresamos la bisqueda de un articulo


			$article=Filtrer_Article::make($req);

			return $article;
			
			// var_dump($article);

		}
}
