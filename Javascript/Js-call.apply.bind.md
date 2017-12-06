```html
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Js-call/apply/bind</title>
</head>

<body>

</body>
<script>
  //call
  let a = {
    user: 'testCall',
    fn: function (e, ee) {
      console.log(this.user)
      console.log(e + ee)
    }
  }

  let b = a.fn;
  b.call(a, 1, 2);  //testCall  3
  //apply
  let c = {
    user: 'testApply',
    fn: function (e, ee) {
      console.log(this.user)
      console.log(e + ee)
    }
  }

  let d = c.fn;
  d.apply(c, [500, 200]);  //testApply 700

  //注意如果call和apply的第一个参数写的是null，那么this指向的是window对象
  //bind()
  let f = {
    user: 'testBind',
    fn: function (e, ee, eee) {
      console.log(this.user)
      console.log(e + ee + eee)
    }
  }

  let g = f.fn;
  let h = g.bind(f)
  console.log(h(1, 2, 3))
//总结：call和apply都是改变上下文中的this并立即执行这个函数，bind方法可以让对应的函数想什么时候调就什么时候调用，并且可以将参数在执行的时候添加，这是它们的区别，根据自己的实际情况来选择使用。

</script>

</html>
```