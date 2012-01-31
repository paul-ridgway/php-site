<a href="/">PHP Info</a>
|
<a href="/?cpu=1">CPU</a>
<?php
        if ($_REQUEST['cpu'] == 1) {
                echo "Run CPU";
                for($i = 0; $i < 1000000000; ++$i) {

                }
                echo "CPU Ran";

        } else {
                phpinfo();
        }
?>
