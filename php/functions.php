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
?>


