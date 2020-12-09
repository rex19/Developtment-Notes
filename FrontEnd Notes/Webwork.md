

# Webpack 常用配置

### 多线程技术在服务端技术中已经发展的很成熟了，而在Web端的应用中却一直是鸡肋, 通常用于股市类高并发的复杂性数据处理。

### 在新的标准中，提供的新的WebWork API，让前端的异步工作变得异常简单。

### 使用：创建一个Worker对象，指向一个js文件，然后通过Worker对象往js文件发送消息，js文件内部的处理逻辑，处理完毕后，再发送消息回到当前页面，纯异步方式，不影响当前主页面渲染

  ```html

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <script type="text/javascript">
        //创建线程 work对象
        var work = new Worker("webWork.js");  
        //发送消息
        work.postMessage("1000");
        // 监听消息
        work.onmessage = function(event) {
            alert(event.data);
        };
    </script>
</head>
<body>
</body>
</html>

  ```

  ### webWork.js

  ```json

        onmessage = function (event) {
            //从1加到num
            var num = event.data;
            var result = 0;
            for (var i = 1; i <= num; i++) {
                result += i;
            }
            postMessage(result);
        }

  ```