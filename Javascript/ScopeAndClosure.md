```html
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>js作用域和闭包</title>
</head>

<body>

</body>
<script>
  var a = 3; //全局变量
  function fn(b) { //局部变量
    c = 2; //全局变量
    var d = 5; //局部变量
    function subFn(b) {
      var e = d + b; //父函数的局部变量对子函数可见
      for (var i = 0; i < 3; i++) {
        console.log('作用域1', i + e);
      }
      console.log('作用域2', i);//3, 在for循环内声明，循环外function内仍然可见，没有块作用域
      return i
    }
    return subFn(b)
  }
  console.log('作用域3', fn(1), c)//在function内声明但不带var修饰，仍然是全局变量

</script>
<script>
  //非闭包
  function outer1() {
    var localValue = 30;
    return localValue;
  }
  console.log(outer1()) //30 函数调用后localVal就被垃圾回收掉了

  //闭包
  function outer2() {
    var localVar = 10;  // 自由变量
    function innerFn(innerParam) {
      console.log(innerParam + localVar);
    }
    return innerFn;
  }
  var outer3 = outer2()
  console.log(outer3(3))
  console.log(outer3(5))
  console.log(outer3(1))

  //展现闭包特性
  var foo = (function () {
    var localVal = 'rex'
    return {
      getVal: function () {
        return localVal;
      },
      setVal: function (newVal) {
        localVal = newVal;
      }
    }
  }())
  console.log(foo.getVal())  //rex
  console.log(foo.setVal('foo'))  //设置foo为闭包函数内的变量  并没有回收
  console.log(foo.getVal())  //foo

</script>

</html>
```