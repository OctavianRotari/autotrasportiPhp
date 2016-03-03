<?php include "../php/functions.php"?>
<!DOCTYPE html>
<html lang="en">
      <head>
	    <meta charset="UTF-8">
	    <link rel="stylesheet" href="../css/bootstrap.css">
	    <link rel="stylesheet" href="../css/bootstrap-responsive.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Autotrasporti Rotari</title>
      </head>
      <body>
	    <script src="../js/jquery-1.12.1.min.js"></script>
	    <script src="../js/bootstrap.js"></script>
	    <div class="navbar navbar-fixed-top">
		  <div class="navbar-inner">
			<div class="container">
			      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				    <span class="icon-th-list"></span>
			      </a>
			      <a href="#" class="brand">Autotrasporti Rotari</a>
			      <div class="nav-collapse collapse">
				    <ul class="nav pull-center">
					  <li class="<?php isCurrentPage("index.php") ?>"><a href="index.php">Home</a></li>
					  <li class="<?php isCurrentPage("flotta.php")?>"><a href="flotta.php">Flotta</a></li>
					  <li class="<?php isCurrentPage("storia.php")?>"><a href="storia.php">Storia</a></li>
					  <li class="<?php isCurrentPage("contatti.php")?>"><a href="contatti.php">Contatti</a></li>
				    </ul>
			      </div>
			</div>
		  </div>
	    </div>

