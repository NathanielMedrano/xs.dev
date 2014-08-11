<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('home');
	}

	public function about()
	{
		return View::make('about');
	}

	public function services()
	{
		return View::make('services');
	}
	public function capability()
	{
		return View::make('capability');
	}

	public function cert()
	{
		return View::make('cert');
	}

	public function contact()
	{
		return View::make('contact');
	}

	public function portfolio()
	{
		return View::make('portfolio');
	}
}
