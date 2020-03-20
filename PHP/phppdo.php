<?php

class Person{
  public $age;
  public function say($word){
    echo "she say  {$word}<br/>";
  }
  public function info(){
    $this->say('Hi');
    return $this->age;
  }
}


$xiaohong = new Person;
$xiaohong ->age = 22;
$age = $xiaohong ->info();
echo $age;

?>