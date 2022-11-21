<?php

trait animal{
    public function getfoot(){
        echo "I have 4 foot ";
    }
}

class dog{
    use animal;
}

$animal = new dog();
$animal->getfoot();

?>