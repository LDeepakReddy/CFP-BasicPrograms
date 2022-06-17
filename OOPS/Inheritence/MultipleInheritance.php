<?php

trait Animal {
    function animal(){
        echo "Animal execute\n";
    }
}

trait Cat{
    function cat(){
        echo "Cat execute\n";
    }
}
class Sound{
    use Animal,Cat;

}

$sound = new Sound();
$sound->cat();
$sound->animal();

?>