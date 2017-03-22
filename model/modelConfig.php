<?php
/**
 * Class ClassConfig to set up the connection to bdd
 * To provide other Classes related to the model to use a method dedicated to query
 */
class ModelConfig
{
    Private $bdd;

    Public function __construct()
    {
        if($this->bdd == null)
        {
            $this->bdd = new PDO("mysql:host=localhost;dbname=P5_OC;charset=utf8",'root','root',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        }
        return $this->bdd;
    }

    public function getBdd()
    {
        return $this->bdd;
    }

    /*Public function queryBdd($sql, $param = null)
    {
        //if we need a simple sql request without specific parameter then the first is executed else the second as a prepared query
        if($param === null)
        {
            $result = $this->bdd->query($sql);
        }
        else
        {
            $result = $this->bdd->prepare($sql);

            $result->execute($param);
        }

        return $result;
    }*/

}