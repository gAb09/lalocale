<?php
// Session::forget('success');
/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
//
});

App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest()) 
		return Redirect::route('login')->with('erreur', 'Il faut montrer patte blanche…');
});


Route::filter('admin', function()
{
	if (Auth::user()->role_id == 1)
	{

	}else{
		return Redirect::back()->with('erreur', 'Vous n’avez pas les droits d’accès à l’espace d’administration');
	}
});




Route::filter('user', function()
{
	if (!Auth::check() or Auth::user()->role_id == 3) 
		return Redirect::back()->with('erreur', 'Vous n’avez pas les droites d’accès à la zone "utilisateur"');
});



Route::filter('auth.basic', function()
{
	return !Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

/*
|--------------------------------------------------------------------------
| Chargement des fichiers de filtres des modules
|--------------------------------------------------------------------------*/

require_once("modules/tresorerie/filters.php");
