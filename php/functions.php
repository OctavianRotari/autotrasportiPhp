<?php
function isCurrentPage($file_name){
	$path_to_file = $_SERVER['PHP_SELF'];
	$this_file = $file_name;
	$pos = (strpos($path_to_file, $this_file));

	if($pos){
		echo 'active my-navbar-active';
	}else{ 
		echo '';
	};
}

function sendEmail() {
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$number = $_POST['numero'];
		$text = $_POST['text'] . '<br> Spedita da: ' . $name . ' Email: ' . $email . '<br> Numero telefonico: ' . $number;
		$header = "From:" . $email;
		$message = "Completare tutti i campi " . $name . $email . $text;
		if(empty($name) || empty($email) || empty($text) || empty($number)){
			echo "<script type='text/javascript'>alert('$message')</script>";
		} else {
			$result = mail('octavianrotari@gmail.com', $name, $text, $header);
			if(!$result){
				echo "<h3>email not sent</h3>";
			} else {
				echo "<h3>email sent</h3>";
			}
		}
	}
}
?>

