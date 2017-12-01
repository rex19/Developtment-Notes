```html
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>事件捕获和冒泡</title>
</head>

<body>
  <div id="ev">
    <style>
      #ev {
        width: 300px;
        height: 100px;
        background: red;
        color: #fff;
        text-align: center;
        line-height: 100px;
      }
    </style>
    目标元素
  </div>
</body>
<script type="text/javascript">
  var ev = document.getElementById('ev');
  //捕获
  window.addEventListener('click', function () {//获取window对象
    console.log('window captrue')
  }, true) //如果true则是捕获阶段触发

  document.addEventListener('click', function () {//获取document
    console.log('document.captrue')
  }, true)

  document.documentElement.addEventListener('click', function () {   //获取html节点
    console.log('html captrue')
  }, true)

  document.body.addEventListener('click', function () { //获取body节点
    console.log('body captrue')
  }, true)

  ev.addEventListener('click', function () {//获取目标元素
    console.log('ev captrue')
  }, true)
  //冒泡
  window.addEventListener('click', function () {//获取window对象
    console.log('window captrue')
  }, false) //如果true则是捕获阶段触发

  document.addEventListener('click', function () {//获取document
    console.log('document.Bubble ')
  }, false)

  document.documentElement.addEventListener('click', function () {   //获取html节点
    console.log('html Bubble')
  }, false)

  document.body.addEventListener('click', function () { //获取body节点
    console.log('body Bubble')
  }, false)

  ev.addEventListener('click', function () {//获取目标元素
    console.log('ev Bubble')
  }, false)

  var eve = new Event('test');
  ev.addEventListener('test', function () {
    console.log('test dispatch');
  })

  setTimeout(function () {
    ev.dispatchEvent(eve)
  }, 1000);

</script>

</html>
```