 <!-- Partie I : PHP -->

 <!-- Question 2 -->

<?php
 function sumPrecedents($number)
{
    $sum = 0;

    for($i = $number; $i >= 1; $i--)
        $sum += $i;

    return $sum;
}

echo sumPrecedents(10);

?>