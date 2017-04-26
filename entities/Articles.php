<?php
class Articles
{
    private $id;
    private $title;
    private $date;
    private $content;

    public function __construct($data, $clean = 0)
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
                //Added $clean variable to protect the value insterted in db as this will be set and used in dbmanager
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
        return $this->date;
    }

    //Setters for all attributes related to the columns/entries of Article's table in the bdd
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setId($id)
    {
        $id = (int)$id;

        if(!is_int($id))
        {
            echo "this is expected to be a number";
        }
        $this->id = $id;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
}