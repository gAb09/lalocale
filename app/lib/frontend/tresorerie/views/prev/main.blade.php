@extends('frontend/views/layout')

@section('titre')
@parent
@stop


@section('topcontent1')
<h1 class="titrepage">{{ $titre_page }}</h1>
@stop


@section('topcontent2')
Choix des années
@stop


@section('contenu')

@foreach($ecritures as $ecriture)

@if($ecriture->mois_nouveau)

<table>
	<caption class="ligne_mois" id="{{$ecriture->date_valeur}}" onclick="javascript:volet(this);">
		{{ ucfirst(Date::MoisAnneeInsec($ecriture->date_valeur)) }}
	</caption>

	<thead class="replie" id="tetiere{{$ecriture->mois_classement}}">
		<th>
			Date de valeur
		</th>
		<th>
			Type
		</th>
		<th colspan="2">
			Libellé
		</th>
		<th>
			Montant
		</th>
		<th>
			Banque 1
		</th>
		<th>
			Banque 2
		</th>
		<th>
			Banque 3
		</th>
		<th>
			Banque 4
		</th>
		<th>
			Solde global
		</th>
		<th class="icone">
			Edit
		</th>
		<th class="icone">
			Dupli
		</th>
	</thead>

	<tbody class="replie" id="corps{{$ecriture->mois_classement}}">

		@endif

		@include('frontend/tresorerie/views/prev/row')

		@endforeach

	</tbody>

</table>

@stop




@section('footer')

@parent

<h3>  Le footer de recettes_depenses</h3>

@stop


@section('zapette')

	{{link_to_action('EcritureController@create', 'Ajouter une écriture', null, ["class" => "btn btn-success iconemedium add"])}}

@stop




@section('script')

<script type="text/javascript">

<?php
if( $mois = Session::get('mois') ){
echo 'var mois = '.$mois.';';
}else{
echo 'var mois = "";';
}
?>
	if (mois) {
		var curhead = document.getElementById("corps"+mois);
		var curcorps = document.getElementById("tetiere"+mois);
		curhead.className = "";
		curcorps.className = "";
	}

</script>

<script src="/assets/js/volets.js">
</script>

<script src="/assets/js/incrementeStatuts.js">
</script>

@stop