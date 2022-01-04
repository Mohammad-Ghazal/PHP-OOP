<?php


class Fruit {



protected $name;
protected $color;


function __construct($name)
{
    $this->name=$name;
}

function changeName($name){
 $this->name=$name;
}
function eat(){
    echo 'eat the '. $this->name;
}

}
$apple = new Fruit('apple');  
$apple->changeName('red apple');
echo $apple->eat()."<br>";




 
class BlueFrute extends Fruit{
   
    function eat(){
        echo 'eat the blue '. $this->name;
    }
 
 
}
 

$bluBerry = new BlueFrute('blue berry');  
 
$bluBerry->eat();


//abstract example
abstract class Car {
    abstract public function selectModel($model);
    abstract public function setSpeed($speed);
  }

   class Ferrari extends Car {
    protected  $model='Ferrari';

      function selectModel($model){
        echo 'sorry you cant change the model to '.$model;
    }

      function setSpeed($speed){
        echo 'ok we will do it latter';

      }
  }

  $redFerrari = new Ferrari();


  //Encapsulation

  class Cat{
 
    public $name ="LOLO";
    public $age = "1.5";
    private $place = "home";
    private $bitrh_date = 1/6/2020;
}
 
class Lion extends Cat{
 
    public $weigt = 180;
    private $danger ='true';
 
}
class Lioness extends Lion{
 
    private $sons = 3;
 
}