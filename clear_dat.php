<?php

	foreach(glob("./pay_data_base/cache_mail/"."*") as $file) {

		if(time() - filectime($file) > 7200){
    	
    		unlink($file);

    	}

	}

	foreach(glob("./pay_data_base/cache_pay/"."*") as $file) {

		if(time() - filectime($file) > 7200){
    	
    		unlink($file);
    		
    	}

	}

?>