```html
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DOM操作的常用api</title>
</head>

<body>
  <div id="div1" class="class-div1">
    <p id="p1" data-name="p1-data-name">p1Value</p>
    <p id="p2">p2Value</p>
  </div>
  <div id="div2">
    <p id="p3"></p>
    <p id="p4"></p>
  </div>

</body>
<script type="text/javascript">
  //property  获取js对象属性 更改属性
  var div1 = document.getElementById('div1')
  var divList = document.getElementsByTagName('div')
  console.log('div', div1, divList)
  var pList = document.querySelectorAll('p')
  console.log(pList)
  console.log('divClass', div1.className)
  div1.className = 'abc'
  console.log('divClass', div1.className)

  //attr  获取标签属性 更改属性
  var p1 = document.getElementById('p1')
  console.log(p1.getAttribute('data-name'))
  p1.setAttribute('data-name', 'xyz')


  /**
   * 操作DOM   新增节点  获取父元素  获取子元素  删除节点
   */
  //新增新节点
  var div1 = document.getElementById('div1')
  var p1 = document.createElement('p')
  p1.innerHTML = 'this is  new p1'
  div1.appendChild(p1) //添加新创建的元素
  //移动已有节点
  var p2 = document.getElementById('p2')
  div1.appendChild(p2)
  // 获取父元素  获取子元素
  var div1 = document.getElementById('div1')
  var parent = div1.parentElement
  var child = div1.childNodes
  console.log('获取父元素和子元素', parent, child, child[1].nodeName, child[1].nodeType)
  // 删除节点
  div1.removeChild(child[1])

</script>

</html>
```