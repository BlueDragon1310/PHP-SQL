 <!-- Partie I : PHP -->

 <!-- Question 4 -->

<?php

$name_list = [
    "Oceane",
    "Bryton",
    "Cloe",
    "Bjorn"
];

if(isset($_POST['search'])) {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']); // protection for xss
        if (in_array(ucwords(strtolower($name)), $name_list)) {
            echo "Nom: ".ucwords(strtolower($name));
        } else {
            echo "Nom incorrect";
        }
    } else {
        echo "Veuillez saisir un nom";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Mon formulaire</title>
</head>
<body>
    <form method="POST">
        <p>Tapez un utilisateur</p>
        <input type="text" name="name">
        <input type="submit" name="search">
    </form>
</body>
</html>