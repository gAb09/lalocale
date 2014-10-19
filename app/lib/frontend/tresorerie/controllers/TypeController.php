<?php
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Lib\Validations\TypeValidation;

class TypeController extends BaseController {

	protected $validateur;


	public function __construct(TypeValidation $validateur)
	{
		$this->validateur = $validateur;
	}



	public function index()
	{
		$types = Type::all();

		return View::Make('frontend.tresorerie.views.types.index')
		->with('types', $types)
		->with('titre_page','Les types d’écriture')
		;
	}



	public function create()
	{
		$type = new Type(Type::fillFormForCreate());

		return View::Make('frontend.tresorerie.views.types.create')
		->with('type', $type)
		->with('titre_page', 'Création d’un “type d’écriture”')
		;
	}



	public function store()
	{
		// dd(Input::all()); // CTRL
		$validation = $this->validateur->validerStore(Input::all());

		if($validation === true) 
		{

			Type::create(Input::except('_token'));

			Session::flash('success', 'Le type "'.Input::get('nom').'" a bien été créé');

			return Redirect::action('TypeController@index');
		}else{
			return Redirect::back()->withInput(Input::all())->withErrors($validation);
		}
	}


	public function edit($id)
	{
		$type = Type::findOrFail($id);

		return View::Make('frontend/tresorerie/views/types/edit')
		->with('type', $type)
		->with('titre_page', 'Édition du type “'.$type->nom.'” <small>(Id '.$type->id.')</small>')
		;
	}

	public function update($id)
	{
		// return dd(Input::all());

		$item = Type::findOrFail($id);

		$item->fill(Input::except('_token', '_method'));

		$validation = $this->validateur->validerUpdate(Input::all(), $id);

		if($validation === true) 
		{

			$item->save();

			Session::flash('success', 'Le type "'.Input::get('nom').'" a bien été modifié');

			return Redirect::action('TypeController@index');

		}else{
			return Redirect::back()->withInput(Input::all())->withErrors($validation);
		}

	}

	public function destroy($id)
	{
		$item = Type::findOrFail($id);

		$item->delete();

		Session::flash('success', "Le type “$item->nom'” a bien été supprimé");

		return Redirect::action('TypeController@index');
	}

}
