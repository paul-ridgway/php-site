
<a href="/">PHP Info</a>
|
<a href="/?cpu=1">PHP Info</a>
<?php 
	if ($_REQUEST['cpu']) {
		echo "Run CPU"
		for($i = 0; i < 1000000000; ++$i) {
			
		}
		echo "CPU Ran"
		
	} else {
    	phpinfo();
	}
?>
