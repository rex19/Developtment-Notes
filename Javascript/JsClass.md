```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>类和实例几种方式</title>
</head>

<body>

</body>
<script type="text/javascript">
  //第一种方式  字面量创建
  var o1 = { name: 'o1' }
  var o2 = new Object({ name: 'o2' })
  //第二种方式  构造函数
  var M = function () { this.name = 'o3' }
  var o3 = new M('o3');
  //第三种方式  Object.create
  var p = { name: 'p' };
  var o4 = Object.create(p)

</script>
</html>
```