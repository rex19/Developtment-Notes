<?php
/**父类 */

class Person{

  public $name;
  private $age;
  protected $money;

  function __construct($name,$age,$money){
    $this->name = $name;
    $this->age = $age;
    $this ->money = $money;
      }

      public function cardInfo(){
        echo "name->".$this->name."  age->".$this->age."  money->".$this->money."<br/>";
      }
}


class Yellow extends Person{
  function __construct($name,$age,$money){
    parent::__construct($name,$age,$money);
  }
  //和父类方法名一样 直接会重写  加上parent:: 则先执行父类cardInfo函数 再往下执行 即PHP重载
  public function cardInfo($pp){
    parent::cardInfo();
    echo $pp;
  }
}

$s = new Yellow("xiaowang",22,100);
$s ->cardInfo(123);

// echo $s->name; //可以继承 
// echo $s->age;//父类私有成员属性。无法被继承
// echo $s->money;//父类受保护的成员属性 可以被继承 无法被外部调用
?>

