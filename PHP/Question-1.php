 <!-- Partie I : PHP -->

 <!-- Question 1 -->

 <!-- A) -->
 
<?php
function multiplicationTable($number)
{
    for($i = 1; $i <= 10; $i++)
        echo $number." x ".$i." = ".($number*$i)."<br>";
}
// B)
for ($i = 1; $i <= 10; $i++) {
    echo "===== [ Table de ".$i."] =====<br>";
    multiplicationTable($i);
    echo "==============================<br>";
}

?>


