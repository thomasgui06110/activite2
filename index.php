<?php
/*class Personnage 
{
    private $_experience = 50;

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
*/

function chargerClasse($classe)
{
    require $classe . '.php';
}
spl_autoload_register('chargerClasse');

$perso = new Personnage;