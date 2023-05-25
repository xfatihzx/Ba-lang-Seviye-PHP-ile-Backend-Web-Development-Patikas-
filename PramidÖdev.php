
<?php
function piramit($NUM){
    $J = 0;
    while($J <= $NUM){

        for($i = 0; $i <= $J ; $i++){
            echo "0";
        }
        $J++;
        echo "<br>";
    }
}
piramit(10);

