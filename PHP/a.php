<?php
// header("Content-type:text/html;charset=utf-8");
header("Content-type:application/json;charset=utf-8");

$username = $_REQUEST['username'];//POST也可以 
if($username=='admin'){
  
  echo json_encode(array('msg'=>'登录成功','errorCode'=>'ok'));
}else{
  echo json_encode(array('msg'=>'登录失败','errorCode'=>'no'));
}
?>