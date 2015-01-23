<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>
		@section('titre')
		{{-- isset($titre_page) ? $titre_page : Menu::where('nom_sys', Request::segment(1))->get()[0]->etiquette --}}
		@show

	</title>
	<link rel="shortcut icon" href="/assets/img/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="/assets/css/tresorerie.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/grille.css" rel="stylesheet" type="text/css">

</head>

<body @section('body') style="background-color:#2D2D2D">
	@show


	<div class="retour">
		<a href="http://lalocale.ckdevelop.org" style="color:#E78600">Retour au site </a>
	</div>

	<div style="text-align:center">
		<img src="/assets/img/grille.png" alt="Oups, il semble qu\'il y a un problème ! Merci de nous prévenir…">
	</div>
<!-- /pages/pages.php?title=grille-des-programmes -->
</body>
</html>