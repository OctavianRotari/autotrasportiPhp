<?php include "header.php"?>
<div class="container">
	<h2>Contatti</h2>
	<form  class="form-horizontal" action="contatti.php" method="post">
	<div class="form-group">
		<label for="name" class="col-sm-2 controll-label">Il tuo nome:</label>
		<div class="col-sm-8">
		<input class="form-controll" type="text" name="name" placeholder="Il tuo nome">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 controll-label">La tua email:</label>
		<div class="col-sm-8">
			<input class="form-controll" type="email" name="email" placeholder="La tua email">
		</div>
	</div>
	<div class="form-group">
		<label for="nome" class="col-sm-2">Il tuo messaggio:</label>
		<div class="col-sm-4">
			<textarea class="form-control" name="text" placeholder="Messaggio"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button name='submit' type="submit" class="btn btn-default">Manda Email</button>
		</div>
	</div>
<?php sendEmail();?>
</div>
</body>
<?php include "footer.php"?>
