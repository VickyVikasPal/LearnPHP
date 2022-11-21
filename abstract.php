
<?php
abstract class food
{
    abstract public function displayFood();
}

class gobhi extends food{
    public function displayFood(){
        echo "Hello World";
    }
}

$food = new gobhi();
$food->displayFood();


?>