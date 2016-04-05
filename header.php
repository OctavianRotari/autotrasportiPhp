<?php include "php/functions.php"?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Autotrasporti Rotari Ravenna trasportiamo la vostra merce</title>
		<meta name="description" content="Autotrasporti Rotari e' situata a Ravenna e si occupa di trasporto merci a livello nazionale e internazionale. Trasporta principalmente materiale ferroso ma possiede le macchine adatte per il trasporto di qualsiasi merce ed e anche attrezzata di autogru che gli permette di trasportare anche container.">
	</head>
	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script defer async src="https://maps.googleapis.com/maps/api/js?callback=googleMap"></script>
	<script src="js/map.js"></script>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container row-marketing">
			<div class="navbar-header col-lg-3">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Autotrasporti Rotari</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse col-lg-10">
				<ul class="nav navbar-nav">
					<li role="presentation" class="<?php isCurrentPage("index.php") ?> col-sm-2"><a href="index.php">Home</a></li>
					<li role="presentation" class="<?php isCurrentPage("containex.php")?> col-sm-2"><a href="containex.php">Container</a></li>
					<li role="presentation" class="<?php isCurrentPage("storia.php")?> col-sm-2"><a href="storia.php">Storia</a></li>
					<li role="presentation" class="<?php isCurrentPage("flotta.php")?> col-sm-2"><a href="flotta.php">Flotta</a></li>
					<li role="presentation" class="<?php isCurrentPage("contatti.php")?> col-sm-2"><a href="contatti.php">Contatti</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
