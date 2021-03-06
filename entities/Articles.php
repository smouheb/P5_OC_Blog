<?php
class Articles
{
    private $id;
    private $title;
    private $name;
    private $date;
    private $content;
    private $chapo;

    public function __construct($data, $clean=0)
    {
        $this->hydrate($data, $clean);
    }

    public function hydrate(array $data, $clean=0)
    {
        foreach ($data as $key=>$value)
        {
            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method))
            {
                //Added $clean variable to protect the value inserted in db as this will be set and used in dbmanager

                if($clean == 1) $value = htmlspecialchars($value);

                $this->$method($value);
            }
        }
    }

    //Getters for all attributes related to the columns/entries of Article's table in the bdd
    public function getTitle()
    {

        return $this->title;
    }

    public function getContent()
    {

        return $this->content;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDate()
    {
        return $this->newDate();
    }
    public function getName()
    {
        return $this->name;
    }

    public function getChapo()
    {

        return $this->chapo;
    }

    //Setters for all attributes related to the columns/entries of Article's table in the bdd
    public function setTitle($title)
    {
        $title = trim($title);

        if(is_string($title)){

            $this->title = $title;

        }
    }

    public function setContent($content)
    {
        $content = trim($content);

        if(is_string($content)){

            $this->content = $content;

        }
    }

    public function setId($id)
    {
        $id = (int)$id;

        if(!is_int($id))
        {
            throw new Exception("this is expected to be a number");
        }
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setChapo($chapo)
    {
        $chapo = trim($chapo);

        if(is_string($chapo)){

            $this->chapo = $chapo;
        }

    }
    /*
     * Private function as not to be used outside of this scope
     * Retrieve the date from the db and first got rid of the time with dateNew
     * Then I changed the order of the date format to be in line with us format
     */
    private function newDate()
    {
        $date = $this->date;
        $dateNew = explode(" ", $date);
        $datechanged = $dateNew[0];
        $datechanged = explode("-", $datechanged);
        $year = $datechanged[0];
        $month = $datechanged[1];
        $day = $datechanged[2];
        $datwithouthour = $month." ".$day." ".$year;

        return $datwithouthour;

    }
}