<?php include "header.php"?>
	<h2>Contatti</h2>
	<form action="send_mail.php" method="">
	<label for="nome">Il tuo nome</label>
	<input id="nome_contatti" type="text" name="nome" placeholder="Il tuo nome">
	<label for="email">La tua email</label>
	<input id="email_contatti" type="text" name="email" placeholder="La tua email">
	<label for="nome">Il tuo messaggio</label>
	<input id="testo" type="text" name="nome" placeholder="Messaggio" rows="7" cols="30">
	<input type="submit" value="Manda Email">
</body>
<?php include "footer.php"?>
