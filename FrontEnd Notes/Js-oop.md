```html
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>oop</title>
</head>

<body>

</body>
<script type="text/javascript">
  /**
  *类的 声明
  */
  function Animal() {
    this.name = 'name';
  }
  // es6类的声明 类
  class Animal2 {
    constructor() {
      this.name = 'name';
    }
  }
  //实例化
  console.log(new Animal(), new Animal2)

  /**
  *类的继承
  第一种  借助构造函数实现继承
  缺点：它只是实现了部分继承，但是它继承不了父类原型对象上的方法 比如Parent.prototype.say()...
  */
  function Parent1() {
    this.name = 'Parent1';
  }
  function Child1() {
    Parent1.call(this); //call 和apple都可以 改变的是函数运行的上下文 使父级构造函数指向子构造函数的实例上去，导致父级的属性在子类也有
    this.type = 'Child';
  }
  console.log(new Child1);
  /*
  第二种，借助原型链实现继承
  缺点：原型链上的原型对象是同一块引用地址  一个改变则其他实例也会被受影响
  */
  function Parent2() {
    this.name = 'Parent2';
    this.play = [1, 2, 3]
  }
  function Child2() {
    this.type = 'Child2';
  }
  Child2.prototype = new Parent2();
  console.log(new Child2)

  var s1 = new Child2();
  var s2 = new Child2();
  s1.play.push(4);
  console.log(s1.play, s2.play);
  /*
  *第三种，组合方式
  *缺点  实例化子类的适合 父级的构造函数执行了两次 存在优化空间
  */
  function Parent3() {
    this.name = 'Parent3';
    this.play = [1, 2, 3];
  }
  function Child3() {
    Parent3.call(this);
    this.type = 'Child3';
  }
  Child3.prototype = new Parent3();
  var s3 = new Child3();
  var s4 = new Child3();
  s3.play.push(4);
  console.log(s3, s4);

  /*
  *组合优化方式
  *缺点  无法用constructor来判断实例化子类的 直接父级构造函数是谁
  */
  function Parent4() {
    this.name = 'Parent4';
    this.play = [1, 2, 3];
  }
  function Child4() {
    Parent4.call(this);
    this.type = 'Child4';
  }
  Child4.prototype = Parent4.prototype
  var s5 = new Child4();
  var s6 = new Child4();
  s5.play.push(4);
  console.log(new Child4, s5, s6);
  console.log(s5 instanceof Child4, new Child4 instanceof Parent4)
  console.log(s5.constructor, new Child4 instanceof Parent4)
  console.log(Child4.prototype, Parent4.prototype)
  /*
  *组合优化方式2
  *继承的本质就是原型链
  *组合继承方式的完美写法
  */
  function Parent5() {
    this.name = 'Parent5';
    this.play = [1, 2, 3];
  }
  function Child5() {
    Parent5.call(this);
    this.type = 'Child5';
  }
  Child5.prototype = Object.create(Parent5.prototype)
  Child5.prototype.constructor = Child5;
  var s7 = new Child5();
  var s8 = new Child5();
  s7.play.push(4);
  console.log(s7.constructor, new Child5 instanceof Parent5)

</script>

</html>

```