<?php
class Contacts
{
    private $name;
    private $idmessage;
    private $email;
    private $subject;
    private $message;

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

    public function getIdMessage()
    {
        return $this->idmessage;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getMessage()
    {
        return $this->message;
    }

    //Setters

    public function setIdMessage($idmessage)
    {
        $idmessage = (int)$idmessage;

        if(!is_int($idmessage))
        {
            header('location:../404.php');
        }
        $this->idmessage = $idmessage;
    }

    public function setName($name)
    {
        $name = trim($name);

        if(empty($name)){

            echo 'This cannot be empty';

            header('location:../404.php');

        }
        $this->name = $name;
    }

    public function setEmail($email)
    {
        if(empty($email)){

            header('location:../404.php');

        }
        $this->email = $email;
    }

    public function setSubject($subject)
    {
        if(empty($subject)){

            header('location:../404.php');

        }
        $this->subject = $subject;
    }

    public function setMessage($message)
    {
        if(empty($message)){

            $wrongmessage = 'the message cannot be empty';

            header('location:../404.php?message='.$wrongmessage);

        }
        $this->message = $message;
    }

}