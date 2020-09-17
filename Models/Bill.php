<?php

 namespace Models;

 class Bill {
    
    private $date;
    private $type;
    private $number;

    public function __construct($date, $type, $number){

        $this->date = $date;
        $this->type = $type;
        $this->number = $number;
    }

    public function getDate(){
        return $this->date;
    }

    public function getType(){
        return $this->type;
    }
    public function getNumber(){
        return $this->number;
    }

}
?>