<?php

class Type extends Eloquent {
	use ModelTrait;

	protected $guarded = array('id'); // AFA
	protected $softDelete = true; // AFA

	protected static $unguarded = true; // AFA

	protected $default_values_for_create = array(
		'nom' => 'Nom du type d’écriture',
		'description' => 'Saisir ici la description.',
		'req_justif' => 0,
		'sep_justif' => 'Saisir un séparateur',
	);

	/* —————————  RELATIONS  —————————————————*/

	public function ecriture()
	{
		return $this->hasMany('Ecriture');
	}


	/* —————————  ACCESSORS  —————————————————*/


	/* —————————  MUTATORS  —————————————————*/

	public function setSepJustifAttribute($value)
	{

		$value = ' '.$value.' ';
		$this->attributes['sep_justif'] = $value;
	}



	/* —————————  Helpers  —————————————————*/ // aFa passer en requete ajax traitée par controleur ??
	/* Obtenir (au format json) la liste des "id" des types d'écriture requérant une banque liée */
	public static function type_dble_ecriture()
	{
		$req_banque2 = Type::where('req_banque2', 1)->get(array('id'))->toArray();

		foreach ($req_banque2 as $key => $value) {
			$array[] = ''.$value['id'].'';
		}

		return $array;
		// dd($array); // CTRL
	}

}