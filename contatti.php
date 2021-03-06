<?php include "header.php"?>

<div class="container">
	<div class="featurette-heading container">
		<div class="jumbotron">
			<h2>Contatti</h2>
			<p>
						Indirizzo:<a style="color:#fff" href="http://maps.google.com/?q=autotrasporti%20rotari" target="_blank"> via dell'abbondanza Piangipane (RA)</a>
						<br>
						Numero: <a style="color:#fff" href="tel:+393477353264">+39 347 735 3264</a>
						<br>
						Email: <a style="color:#fff" href="mailto:dorinrotari@gmail.com?Subject=information" target="_top">dorinrotari@gmail.com</a></p>
		</div>
		<div class="col-md-6 col-md-push-6">
			<form  class="form-horizontal" action="contatti.php" method="post">
				<div class="form-group">
					<div class="col-sm-12">
						<input class="form-control" type="text" name="name" placeholder="Il tuo nome">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input class="form-control" type="email" name="email" placeholder="La tua email">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input class="form-control" type="text" name="numero" placeholder="It tuo numero">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<textarea class="form-control" rows="10" name="text" placeholder="Messaggio"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10">
						<button name='submit' type="submit" class="btn btn-default">Manda Email</button>
					</div>
				</div>
				<?php sendEmail();?>
			</div>
			<div class="col-md-6 col-md-pull-6">
				<div id=map style="height:410px">
					<script src="js/map.js">
					</script>
				</div>
			</div>
		</div>
	</div>
</body>
<?php include "footer.php"?>