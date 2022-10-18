<?php

/**
 *
 */
namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Article;

class Filtrer_Article
{

	// function __construct(argument)
	// {
	// 	# code...
	// }

	public static function make(Request $req){
		try{

		$palabra=$req->id;
		$result=Article::join('article__categories','article__categories.article_id','=','articles.id')
		->join('categories','categories.id','=','article__categories.catgegory_id')
		->where('articles.name','like',$palabra.'%')
		->orwhere('articles.description','like',$palabra.'%')
		->select("articles.name as name_article", "categories.name as name_cate")
		->first();
		if(isset($result)){
			$message=$result->name_cate;
		}else{
			$message='sin resultado...';
		}
		$response=[
				'status'=>1,
				'message'=>$message,
			];

		return json_encode($response);


		}catch(Exception $ex){
			$response=[
				'status'=>-1,
				'message'=>'Error con el servidor',
			];
			return json_encode($response);

		}
		// foreach ($result as $key) {
		// 	 $resul=$key->name;
		// }
	}

}
