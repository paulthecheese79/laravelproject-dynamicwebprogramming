
<?php
    function isPrime($num) {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }


    $num = readline("Enter a number: ");
    if ($num % 2 == 0) {
        echo $num . " is Even\n\n";
    } else {
        echo $num . " is Odd\n\n";
    }

    $number = readline("Enter a number: ");
    if (!is_numeric($number)) {
        echo "Invalid input. Please enter a number.\n";
        exit;
    }
    $number = (int) $number;
    for ($ctr = 2; $ctr <= $number; $ctr++) {
        if (isPrime($ctr)) {
            echo $ctr . " is a prime number\n";
        } else {
            echo $ctr . " is not a prime number\n";
        }
    }

?>
