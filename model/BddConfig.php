<?php
/**
 * Class ClassConfig to set up the connection to bdd
 * To provide other Classes related to the model to use a method dedicated to query
 */
class BddConfig
{
    Private $bdd;

    Public function __construct()
    {
        if($this->bdd == null)
        {
            $this->bdd = new PDO("mysql:host=localhost;dbname=P5_OC",'root','root',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        }
        return $this->bdd;
    }

    public function getBdd()
    {
        return $this->bdd;
    }


}