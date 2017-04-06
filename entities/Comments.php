<?php
class Comments
{
    private $idcomment;
    private $comment;
    private $name;
    private $date;

    public function __construct($data, $clean = 0)
    {
        $this->hydrate($data, $clean);

    }
    public function hydrate(array $data, $clean = 0)
    {
        foreach ($data as $key=>$value)
        {
            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method))
            {
                if($clean == 1) $value = htmlspecialchars($value);

                $this->$method($value);
            }
        }
    }
    //Getters
    public function getIdComment()
    {
        return $this->idcomment;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getName()
    {
        return $this->name;
    }

    //Setters
    public function setIdComment($idcomment)
    {
        $idcomment = (int)$idcomment;

        if(!is_int($idcomment))
        {
            echo "it is expected to have a number";
        }

        $this->idcomment = $idcomment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function setDate($date)
    {
        $date = explode("-", $date);
        $year = $date[0];
        $month= $date[1];
        $day = $date[2];

        $date = $day."/".$month."/".$year;

        $this->date = $date;
    }

    public function setName($name)
    {
        $name = ucfirst($name);

        $this->name = $name;
    }
}
