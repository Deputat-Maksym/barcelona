<?php
	
	header("Content-type: text/javascript");
	
	include "./Packer.php";

	$js = file_get_contents("./eng.js");

	$packer = new Tholu\Packer\Packer($js, 'Normal', true, false, true);
	$packed_js = $packer->pack();
	
	echo $packed_js;