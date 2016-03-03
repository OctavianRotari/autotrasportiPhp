<?php
function isCurrentPage($file_name){
	$path_to_file = $_SERVER['PHP_SELF'];
	$this_file = $file_name;
	$pos = (strpos($path_to_file, $this_file));

	if($pos){
		echo 'active';
	}else{ 
		echo '';
	};
}

function sendEmail() {
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$text = $_POST['text'];
		$message = "Completare tutti i campi " . $name . $email . $text;
		if(empty($name) || empty($email) || empty($text)){
			echo "<script type='text/javascript'>alert('$message')</script>";
		} else {
			$result = mail('octavianrotari@gmail.com', 'the subject', 'the message');
			if(!$result){
				echo "<h3>email not sent</h3>";
			} else {
				echo "<h3>email sent</h3>";
			}
		}
	}
}
?>


