@extends('menus/views/layout')

@section('titre')
@parent
@stop


@section('titrepage')
		<h1>{{$titre_page}}</h1>
@stop



@section('contenu')

	{{ Form::open(array('url' => URL::action('MenuController@store'), 'method' => 'post')) }}

@include('menus/views/form')


@stop

@section('topfoot1')
{{ link_to_action('MenuController@index', 'Retour à la liste', null, array('class' => 'btn btn-info btn-zapette iconesmall list')); }}

{{ Form::submit('Créer ce menu', array('class' => 'btn btn-success')) }}
{{ Form::close() }}
@stop

@section('affichage')
@stop


@section('footer')
@parent
<h3>  Le footer de menus</h3>

@stop