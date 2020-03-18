<?php

class Person{


  public $x = 11;
  public $BrotherName ='rex';
  private $name ='zhijia';
  private $age= 27;
  protected $money=10;

  //私有的成员方法，不能被类外部直接访问
  private function getAge(){
    return $this->age;
  }

  //被保护的成员方法，不能被类外部直接访问
  protected function getMoney(){
    return $this->money;
  }

  public function userCard(){
    echo "name->".$this->name."  age->".$this->getAge()."  money->".$this->getMoney()."<br/>";
  }

  public function __set($key,$value){
    //魔术方法的__set 只针对protected private  
    echo '__set- '.$key.$value;
    if($key =='name'&& $value=='laowang'){
      $this->name ='xiaowang';
    }
  }

  public function __get($key){
    if($key =='age'){
      return "Girl not tell you!<br/>";
    }
  }

  public function __isset($key){
    if($key=='age'){

      return true;
    }
  }

  public function __unset($key){
    if($key=='age'){
      unset($this->age);
      // return true;
    }
  }
}

$xw  = new Person();
// echo $xw ->BrotherName;//'rex'
// echo $xw ->name; //提示无权限
// echo $xw ->age;//提示无权限
// echo $xw ->money;//提示无权限
$xw->name = 'laowang';
echo $xw ->userCard();
echo $xw ->age;
// var_dump(isset($xw->age)) ;//false
// var_dump(isset($xw->BrotherName)) ;//true
echo isset($xw->age); //1
// unset($xw->age);
// echo $xw->age; //去掉__get方法 报错找不到age了

?>
