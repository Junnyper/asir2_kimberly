<?php

	if(isset($_GET))
		print_r($_GET);

#guardar suscriptores
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['email']."\r\n");
fclose($f)
?>

<form>

	<input name="email"/>
	<button> Subscribe </button>
	
</form>