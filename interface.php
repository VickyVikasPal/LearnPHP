<?php 

interface animal{
    public function makesound();
}

class dog implements animal{
    public function makesound(){
        echo "hooo";
    }
}

$dog = new dog();
$dog->makesound();


?>