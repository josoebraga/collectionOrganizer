<?php

for($i=21;$i<100;$i++){
echo '<pre>';
echo
$texto =
"       t$i.start();
        try {
            t$i.join();
        } catch (InterruptedException ie) {
            ie.printStackTrace();
        }
";
echo '</pre>';

}