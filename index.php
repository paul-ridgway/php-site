<a href="/">PHP Info</a>
|
<a href="/?cpu=1">CPU</a>
<br />
<?php
        if ($_REQUEST['cpu'] == 1) {
				$time = microtime();
				$time = explode(' ', $time);
				$time = $time[1] + $time[0];
				$start = $time;                echo "Run CPU...<br />";
                for($i = 0; $i < 100000000; ++$i) {

                }
                echo "CPU Ran";
				$time = microtime();
				$time = explode(' ', $time);
				$time = $time[1] + $time[0];
				$finish = $time;
				$total_time = round(($finish - $start), 4);
				echo ' in '. $total_time.' seconds.'."\n";

        } else {
                phpinfo();
        }
?>
