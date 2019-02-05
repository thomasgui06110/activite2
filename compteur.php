<?php
class Compteur
{
    //Déclaration vaiable compteur
    private static $_compteur = 0;

    public function __construct()
    {
        //On instancie la variable $compteur qui appartient à la classe 
        self::$_compteur++;
    }

    public static function getCompteur()// Méthode statique qui renverra la valeur du compteur
    {
        return self::$_compteur;
    } 
}
$test1 = new Compteur;
$test2 = new compteur;
$test3 = new Compteur;

echo Compteur::getCompteur();
?>