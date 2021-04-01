<?php
    require 'belajar_function.php';
    class user{
        public $name;
        private $gender='female';

        public function setGender($genderName){
            $this->gender=$genderName;
        }
        public function getgender(){
            printMyName();
            return $this->gender;
        }

    }
$andi=new User;
$andi->name="Andi S";
$andi->setGender("male");
echo" and my gender is ".($andi->getgender())


?>