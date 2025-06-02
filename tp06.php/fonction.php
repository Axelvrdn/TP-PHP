<?php

function exercice1(){
    for ($i=0;$i>10;$i++){
        echo $i;
    }
}

function exercice2(){
    for ($i=0;$i>100;$i++){
        echo $i,'-';
    }
}

function exercice3(){
    for ($i=20;$i>=0;$i--){
        echo $i;
    }
}

function exercice4() {
    for ($i = 1; $i <= 10; $i++) {
        $result = $i * 10;
        echo "$i x 10 = $result<br>";
    }
}

function exercice5($number) {
    for ($i = 1; $i <= 10; $i++) {
        $result = $i * $number;
        echo "$i x $number = $result<br>";
    }
}

function exercice6() {
    for ($i = 1; $i <= 20; $i++) {
        $randomNumber = rand(1, 100);
        echo $randomNumber;
    }
}

function exercice7($count) {
    $sum = 0;

    for ($i = 1; $i <= $count; $i++) {
        $randomNumber = rand(1, 32);
        $sum += $randomNumber;
    }

    return $sum;
}

function exercice8() {
    for ($i = 1; $i <= 100; $i++) {
        echo $i, '-';

        // Add a newline every 10 numbers
        if ($i % 10 === 0) {
            echo "<br>";
        }
    }
}

function exercice9($start, $end) {
    // Ensure $start is even, adjust if necessary
    $start = ($start % 2 == 0) ? $start : $start + 1;

    for ($i = $start; $i <= $end; $i += 2) {
        echo $i, ' ';
    }
}

function exercice10($number) {
    $sum = 0;

    for ($i = 1; $i <= $number; $i++) {
        $sum += $i;
    }

    return $sum;
}

function exercice11($word) {
    $length = strlen($word);

    for ($i = 0; $i < $length; $i++) {
        echo $word[$i], "<br>";
    }
}

function exercice12($word, $letter) {
    $wordLength = strlen($word);

    if ($wordLength === 0) {
        return 0; // Avoid division by zero
    }

    $letterCount = 0;

    for ($i = 0; $i < $wordLength; $i++) {
        if ($word[$i] === $letter) {
            $letterCount++;
        }
    }

    $percentage = ($letterCount / $wordLength) * 100;
    $roundedPercentage = round($percentage, 4);

    return $roundedPercentage;
}

function exercice13($inputNumber) {
    $countGreaterThanInput = 0;

    echo "Random Numbers: ";
    for ($i = 0; $i < 20; $i++) {
        $randomNumber = rand(1, 100);
        echo $randomNumber, ' ';

        if ($randomNumber > $inputNumber) {
            $countGreaterThanInput++;
        }
    }

    return $countGreaterThanInput;
}

function exercice14($nb, $bi, $bs) {
    $sum = 0;
    $countEven = 0;
    $valuesAboveMedian = 0;

    echo "Random Numbers: ";

    for ($i = 0; $i < $nb; $i++) {
        $randomNumber = rand($bi, $bs);
        echo $randomNumber, ' - ';

        $sum += $randomNumber;

        if ($randomNumber % 2 === 0) {
            $countEven++;
        }

        if ($randomNumber > ($bi + $bs) / 2) {
            $valuesAboveMedian++;
        }
    }

    echo "<br>$countEven even numbers <br>";
    echo "$valuesAboveMedian values above the median <br>";

    return $sum;
}

function exercice15($word) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $wordWithoutVowels = str_replace($vowels, '', $word);
    return $wordWithoutVowels;
}

function exercice16($word) {
    $length = strlen($word);
    $result = '';

    for ($i = 0; $i < $length; $i += 2) {
        $result .= $word[$i];
    }

    return $result;
}

function exercice17($word) {
    $count = 0;
    $length = strlen($word);

    for ($i = 0; $i < $length; $i++) {
        if (ctype_lower($word[$i])) {
            $count++;
        }
    }

    return $count;
}

function exercice18($word) {
    $count = 0;
    $length = strlen($word);

    for ($i = 0; $i < $length; $i++) {
        if (ctype_upper($word[$i])) {
            $count++;
        }
    }

    return $count;
}

function exercice19($word) {
    $count = 0;
    $length = strlen($word);

    for ($i = 0; $i < $length; $i++) {
        if (ctype_digit($word[$i])) {
            $count++;
        }
    }

    return $count;
}

function exercice20($min, $max, $numValues) {
    $maxRandomValue = PHP_INT_MIN;

    for ($i = 0; $i < $numValues; $i++) {
        $randomValue = rand($min, $max);

        if ($randomValue > $maxRandomValue) {
            $maxRandomValue = $randomValue;
        }
    }

    return $maxRandomValue;
}