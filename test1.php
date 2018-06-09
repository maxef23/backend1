<?php

$value = 0;

$second_counter = 0;

$N = isset($_GET['Name']) ? $_GET['Name'] : 0;

if (is_numeric($N)) {

    print "This is N: ".$N."<br/>";

    while (True) {
        $copy = $value;
        $counter = 1;
        while ($copy >= 10) {
            $counter++;
            $copy = $copy / 10;
        }
        if ($value % $counter == 0) {
            print $value.",";
            $second_counter++;
            if ($second_counter == $N) {
                break;
            }
        }
        $value++;
    }

}
else {
    echo "Incorrect N";
}