<?php
class Routeur extends appController
{

    private $path_info;
    private $args;
    private $controller_class;
    private $idrequest;

    /*
     * This constructor is parsing the url passed by the index and put these data in an array
     * Where first the method/controller name is populated and second the id when it requires an interaction with the db
     */
    public function __construct($path_info){

        $this->path_info = $path_info;

        $this->args = array_filter(explode('/',$this->path_info));

        $this->controller_class = $this->args[1];
        $this->idrequest = $this->args[2];

    }

    /*
     * This method is calling controllers depending on the arguments passed
     * here if there is a value for inserting or creating a post then the related method are called
     * Else we call another method below
     */
    public function routing($value = null){

        if(isset($this->path_info)){

            if (!is_null($value) && isset($this->idrequest) ) {

                    $this->articleUpdate($value, $this->idrequest);

            } elseif(!is_null($value) && !isset($this->idrequest)){

                $this->articleInsert($value);

            } else{

                $this->articleWithParam($this->controller_class, $this->idrequest);
            }

        } else{

            $this->home();
        }
    }

    /*
     * I separated this method from the one above to have a cleaner code (here we request data mostly and the one above we insert which requires different parameters)
     * And this is more adapted, as the first parameter is always the controller name
     * the second is an id
     */
    public function articleWithParam($param1 = null, $param2 = null){


        switch($param1){

            case $param1 === 'home':
                return $this->home();
            break;

            case $param1 === 'articleSelect':
                return $this->articleSelect();
            break;

            case $param1 === 'articleAdmin':
                return $this->articleAdmin();
            break;

            case $param1 === 'articleDetails':
                return $this->articleDetails($param2);
            break;

            case $param1 === 'articleDelete':
                return $this->articleDelete($param2);
            break;

        }

    }
}