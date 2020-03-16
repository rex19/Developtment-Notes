<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Hello World</title>
  <script type='text/javascript' src='https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js'></script>
</head>
<body>
  <?php  //php可以写这里

  /**
   * 准备工作:
   * 安装一体化环境 XAMPP7.4.3-0  
   * 把PHP项目文件夹放到 xamppfiles/htdocs 目录下
   * url测试:localhost/PHP/php_javascript.php
   * 
   */
?>

<form action="a.php" method="get">
  <label>用户名:</label>
  <input type="text" id='username' name='username'></input>
  <p>
    <label >密码:</label>
    <input type="text" name='password'></input>
</p>
  <input type="submit" id='btn' value='提交'></input>
</form>
</body>
<script type='text/javascript'>
  $('#btn').click(function(e){
    e.preventDefault();
    // alert(1)
    $.ajax({
      url:'a.php',
      data:{
        username:$('#username').val(),

      },
      dataType:'json',
      type:'get',
      success:function(data){
       console.log('登录成功-data',data)
      },
      error:function(){
        console.log('登录失败-error')
      }
    })
  })
</script>
</html>