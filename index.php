
<a href="/">PHP Info</a>
|
<a href="/?cpu=1">CPU</a>
|
<a href="/?smem=1">Small Mem</a>
|
<a href="/?mmem=1">Medium Mem</a>
|
<a href="/?lmem=1">Large Mem</a>
<br />
<?php
        if ($_REQUEST['smem'] == 1) {
                $time = microtime();
                $time = explode(' ', $time);
                $time = $time[1] + $time[0];
                $start = $time;
                echo "Run SMem...<br />";
                str_repeat("a", 10000000);
                echo "SMem Ran";
                $time = microtime();
                $time = explode(' ', $time);
                $time = $time[1] + $time[0];
                $finish = $time;
                $total_time = round(($finish - $start), 4);
                echo ' in '. $total_time.' seconds.'."\n";
        } elseif ($_REQUEST['mmem'] == 1) {
                $time = microtime();
                $time = explode(' ', $time);
                $time = $time[1] + $time[0];
                $start = $time;
                echo "Run MMem...<br />";
                str_repeat("a", 50000000);
                echo "MMem Ran";
                $time = microtime();
                $time = explode(' ', $time);
                $time = $time[1] + $time[0];
                $finish = $time;
                $total_time = round(($finish - $start), 4);
                echo ' in '. $total_time.' seconds.'."\n";
        } elseif ($_REQUEST['lmem'] == 1) {
                $time = microtime();
                $time = explode(' ', $time);
                $time = $time[1] + $time[0];
                $start = $time;
                echo "Run LMem...<br />";
                str_repeat("a", 100000000);
                echo "LMem Ran";
                $time = microtime();
                $time = explode(' ', $time);
                $time = $time[1] + $time[0];
                $finish = $time;
                $total_time = round(($finish - $start), 4);
                echo ' in '. $total_time.' seconds.'."\n";
        } elseif ($_REQUEST['cpu'] == 1) {
                $time = microtime();
                $time = explode(' ', $time);
                $time = $time[1] + $time[0];
                $start = $time;
                echo "Run CPU...<br />";
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


