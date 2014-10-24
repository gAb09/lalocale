@extends('frontend/views/layout')

@section('titre')
@parent


@stop


@section('topcontent1')
<h1 class="titrepage">{{$titre_page}}</h1>
@stop


@section('topcontent2')
@stop


@section('contenu')

<hr />
{{ Form::model($ecriture, ['name' => 'form', 'method' => 'put', 'route' => ['tresorerie.ecritures.update', $ecriture->id]]) }}

@include('frontend/tresorerie/views/ecritures/form')

<p>Créée le {{ Date::courte($ecriture->created_at) }}<br />
	Modifiée le {{ Date::courte($ecriture->updated_at) }}</p>
	@stop


	@section('zapette')
	{{ link_to(Session::get('page_depart')."#".Session::get('mois'), 'Retour à la liste', array('class' => 'btn btn-info btn-zapette iconesmall list')); }}

	{{ Form::submit('Modifier cette écriture', array('class' => 'btn btn-edit btn-zapette')) }}
	{{ Form::close() }}

	{{ Form::open(array('url' => 'tresorerie/ecritures/'.$ecriture->id, 'method' => 'delete')) }}
	{{ Form::submit('Supprimer cette écriture', ['class' => 'btn btn-danger', 'onClick' => 'javascript:return(confirmation());']) }}
	{{ Form::close() }}
	@stop

	@section('tresorerie/footer')
	@parent
	<h3>  Le footer de édition d'écritures</h3>
	@stop