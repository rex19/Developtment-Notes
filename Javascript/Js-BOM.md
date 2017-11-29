```html
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BOM常用api</title>
</head>

<body>
</body>
<script>
  //navigator  判断浏览器环境
  var ua = navigator.userAgent
  var isChrome = ua.indexOf('Chrome')
  var isAndroid = ua.indexOf('Android')
  console.log(isChrome, isAndroid)

  //screen  获取浏览器
  console.log('screen.width', screen.width)
  console.log('screen.height', screen.height)

  //location
  console.log('location.href', location.href)  // 整个url
  console.log('location.protocol', location.protocol) //协议  http:/https:
  console.log('location.host', location.host) //域名  
  console.log('location.pathname', location.pathname)  //路径  './learn/199'
  console.log('location.search', location.search)  //'?cid=99'
  console.log('location.hash', location.hash) //'#mid=100'

  //history
  history.back()  //返回
  history.forward()  //前进

</script>

</html>
```