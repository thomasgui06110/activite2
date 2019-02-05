<?php
class Personnage
{
    private $_force;
    private $_localisation;
    private $_experience = 55;

    public function afficherExperience()
    {
        echo $this->_experience;
    }

    public function gagnerExperience()
    {
        $this->_experience = $this->_experience + 1;
    }
}

$perso = new Personnage;
$perso->gagnerExperience();
$perso->afficherExperience();
?>