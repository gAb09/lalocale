@section('body')
onLoad="justifToggle();"
@stop

<!-- liste d'inputs commune au vues CREATE et EDIT -->
<div>
	<!-- Nom -->
	{{ Form::label('nom', 'Nom', array ('class' => '')) }}
	{{ Form::text('nom', $type->nom, array ('class' => '')) }}
</div>

<div>
	<!-- Description -->
	{{ Form::label('description', 'Description', array ('class' => '')) }}
	{{ Form::textarea('description', $type->description, array ('class' => '')) }}
	Pour obtenir un retour ligne saisir les caractères suivants : {{'&lt;br /&gt;'}}
</div>
<hr />


<div>
	<!-- "Justificatif" requis -->
		{{ Form::checkbox('req_justif', 1, $type->req_justif, array ('class' => 'nobr', 'id' => 'justif_check', 'onClick' => 'javascript:justifToggle()')) }}
		{{ Form::label('justif_check', 'Champ “Justificatif” non requis', array ('class' => 'nobr', 'id' => 'justif_label')) }}
</div>
Choisir si ce type d’écriture devra requérir un justificatif.

<div id="req_justif_div">
	<!-- Separateur -->
	{{ Form::label('sep_justif', 'Séparateur', array ('class' => 'nobr')) }}
	{{ Form::text('sep_justif', trim($type->sep_justif), array ('class' => '')) }}
	Choisir le(s) caractère(s) ou le texte de séparation. Cela séparera “type” et “justificatif” dans les différentes listes et vues
</div>

@section('script')
<script src="/assets/js/types.js">
</script>
@stop