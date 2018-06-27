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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
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
	$weekend = date('N')>5;
	return view('pages/weekend')->with('weekend', $weekend);
});