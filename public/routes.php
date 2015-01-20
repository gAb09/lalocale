<?php

/*
|--------------------------------------------------------------------------
| Section prefix "tresorerie"
|--------------------------------------------------------------------------
|
|
*/
Route::group(array('prefix' => 'tresorerie', 'before' => 'auth'), function() 
{
	Route::group(array('before' => 'tresorerie'), function() 
	{




// /*----------------------  Pointage  ----------------------------------*/
		Route::post('pointage/{id?}-{statuts?}', 'PointageController@incrementeStatut');
		Route::get('pointage/{banque_id?}', array('as' => 'pointage', 'uses' => 'PointageController@index'));


		/*----------------------  Écritures  ----------------------------------*/
	// Route::put('ecritures/{id}/ok', array('as' => 'confirmupdate', 'uses' => 'EcritureController@update'));
		Route::get('banque/{banque}', array('as' => 'bank', 'uses' => 'EcritureController@indexBanque'));
		Route::get('banque/dupli/{banque}', array('as' => 'dupli', 'uses' => 'EcritureController@duplicate'));
		Route::resource('ecritures', 'EcritureController');

		/*----------------------  Types  ----------------------------------*/
		Route::resource('types', 'TypeController');

		/*----------------------  Comptes  ----------------------------------*/
		Route::get('comptes/freres', 'CompteController@freres');
		Route::get('comptes/{id?}/freres', 'CompteController@freres');
		Route::get('comptes/classe/{root?}', 'CompteController@index');
		Route::any('comptes/updateactif', array('as' => 'tresorerie.comptes.updateActif', 'uses' => 'CompteController@updateActif'));
		Route::resource('comptes', 'CompteController');

		/*----------------------  Banques  ----------------------------------*/
		Route::resource('banques', 'BanqueController');

		/*----------------------  Notes  ----------------------------------*/
		Route::resource('notes', 'NoteController');

		/*----------------------  Statuts  ----------------------------------*/
		Route::get('statutsvisu', 'StatutController@visu');
		Route::get('statuts', 'StatutController@index');
		Route::resource('statuts', 'StatutController');

	});
/*----------------------  Prévisionnel  ----------------------------------*/
Route::get('previsionnel/{annee?}', 'PrevController@index');


});  // Fin de groupe prefix “tresorerie”

