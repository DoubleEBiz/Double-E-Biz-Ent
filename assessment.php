<?php

function prime_no($max_sum) {
    $sum = $added_prime_num = 0;
    $current_num = 6;

    while (($sum + $current_num) < $max_sum) {
        if (is_prime($current_num)) {
            $sum += $current_num;
            if ($added_prime_num) {
                $added_prime_num = $added_prime_num . ' + ' . $current_num;
            } else {
                $added_prime_num = $current_num;
            }
        }
        $current_num++;
    }
    echo 'Output <br>';
    echo $sum . ' = ' . $added_prime_num;
    echo '<br>';
}

function is_prime($n) {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0 && $n != $i) {
            return false;
        }
    }
    return true;
}

prime_no(1000);
?>
