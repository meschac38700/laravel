<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
Route::get('/', function () {
    return view('welcome');
});

// Mise à jour des données depuis la base de données en utilisant le query builder
Route::get('database/fluentQueryBuilder/update/',function(Request $request)
{
	$title = $request->input('title',"titre par défaut");
	$content = $request->input('content',"commentaire par défaut");
	$success = DB::table('posts')->whereId(1)->update(['title'=>'juste un titre 1', 'body'=>'juste un commentaire 1']);
	dump($success);

});
//Insertion des données dans la base de données
Route::get('/database/insert/', function(Request $request)
{	
	$title = $request->input('title',"titre par défaut");
	$content = $request->input('content',"commentaire par défaut");
	$success = DB::insert('INSERT INTO posts(title,body) VALUES(:title, :body)', ['title'=> $title, 'body'=>$content]);
	dd($success);

})->where(['title'=>'[^0-9]+', 'content'=>'[A-Za-z]']);

// Insertion des données dans la base de données en utilisant les query builder
Route::get('/database/fluentQueryBuilder/insert/', function(Request $request){
	$title = $request->input('title',"titre par défaut");
	$content = $request->input('content',"commentaire par défaut");
	$success = DB::table('posts')->insert(['title'=> $title, 'body'=> $content]);
	dump($success);
});
//Utilisation des query builder pour select des données de la base
Route::get('/about/fluentQueryBuilder/', function()
{
	dump(DB::table('posts')->orderBy('title', 'desc')->get()); // tous les resultats
	dump(DB::table('posts')->get()->take(2)); // limite à deux resultats
	dump(DB::table('posts')
		->where('id', '=', 1)
		->whereBody('Juste un commentaire')
		->get()
	);
	dump(DB::table('posts')->get(['title']));
	dump(DB::table('posts')->first());
	dump(DB::table('posts')->first()->title);
});


Route::get('/about', function(){
	$posts_data =  DB::select('SELECT * FROM posts');
	dump($posts_data);
	$posts = $posts_data[0];
	dump($posts->title);
	$name = "LOTONGA Eliam";
	return view('pages/about')->with("name", $name);
});

Route::get('/help', function()
{
	return view('pages/help');
});

Route::get('/events', function()
{
	$events = [
				'PHP'	  => 'Language coté serveur', 
				'JAVA'	  => 'puissant language de programmation',
				'Laravel' => 'PHP framework',
				'Symfony' => 'PHP framework français'
			];
	return view('pages/events', compact('events'))/*->with("events",$events)*/;
});

Route::get('/weekend', function()
{
	return view('pages/weekend');
});