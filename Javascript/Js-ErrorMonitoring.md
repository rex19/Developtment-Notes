```html
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>错误监控</title>
</head>

<body>


</body>
<script type="text/javascript">
  window.addEventListener('error', function (e) {
    console.log('捕获', e)
  }, true)

</script>
<script src="//baidu.com/test.js"></script>

<script type="text/javascript">
    (new Image()).src = 'http://baidu.com/tesjk?r=tksjk';

</script>

</html>
```