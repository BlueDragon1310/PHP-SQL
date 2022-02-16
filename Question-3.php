 <!-- Partie I : PHP -->

 <!-- Question 3 -->

<?php

class Guerrier {

    private $nom;
    private $age;
    private $force;
    private $level;
    private $arme;

    public function __construct()
    {
        $this->level = 1;
        $this->force = 100;
        $this->arme = "hache";
    }

    // Setters
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setForce($force)
    {
        $this->force = $force;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function setArme($arme)
    {
        $this->arme = $arme;
    }

    #Guetters

    public function getNom()
    {
        return $this->nom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getForce()
    {
        return $this->force;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function getArme()
    {
        return $this->arme;
    }

    # methods

    public function levelUp()
    {
        $this->level+= 1;
        $this->force+= 50;
    }

    public function attaqueCoupDeHache()
    {
        $lucky = rand(1, 100);

        if($lucky <= 50) {
            return "Attaque raté";
        } else {
            return "Attaque réussi ".($this->getForce()*1.5);
        }
    }
}

$guerrier = new Guerrier();

echo $guerrier->attaqueCoupDeHache();
?>