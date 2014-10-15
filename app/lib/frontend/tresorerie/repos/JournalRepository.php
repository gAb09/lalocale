<?php
use lib\shared\Traits\TraitRepository;

class JournalRepository {
	use TraitRepository;

	public function collectionJournal($id, $order, $periode = 'mois')
	{

		$ecritures = Ecriture::with('signe', 'type', 'banque', 'statut', 'compte', 'ecriture2')
		->where('banque_id', $id)
		->orderBy($order)
		->get();

		if ($ecritures->isEmpty())
		{
			return false;
		}

		/* Déterminer le rang de la dernière écriture de la page. */
		$last = $ecritures->count() -1;

		/* Lancer la boucle sur la colection */
		$ecritures->each(function($ecriture) use ($ecritures, $order, $periode, $last) {


			/* ----- Traitement du classement par mois ----- */
			$this->classementParMois($ecriture, $ecritures, $order, $last);


			/* ----- Traitement des soldes ----- */
			$this->getSoldes($ecriture, $ecritures, $order, $periode, $last);

		});

		return $ecritures;

	}


	private function incrementeSoldeRecette($ecriture, $solde){
		if($ecriture->signe_id == 2){
			$solde = $solde + $ecriture->montant;
		}
		return $solde;
	}
	private function incrementeSoldeDepense($ecriture, $solde){
		if($ecriture->signe_id == 1){
			$solde = $solde + $ecriture->montant;
		}
		return $solde;
	}
}
