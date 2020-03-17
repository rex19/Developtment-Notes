<?php
/**
 * 先XAMPP打开mysql. 并新建一个PHPlesson库 -> 新建一个news表->新建五个字段 (`newsid`, `newstitle`, `newsimg`, `newscontent`, `addtime`)
 */
// phpinfo();

$con = new mysqli("localhost", "root", "","PHPlesson");  
if ($con->connect_error) {
  die("连接失败: " . $con->connect_error);
} else{
  //create
    $sql = "INSERT INTO `news`( `newstitle`, `newsimg`, `newscontent`, `addtime`) VALUES ('xx','xx1','xx2','2019-01-01')";

    if ($con->query($sql) === TRUE) {
      echo "新记录插入成功";
  } else {
      echo "Error: " . $sql . "<br>" . $con->error;
  }


  //select

  $sql = "SELECT `newsid`, `newstitle`, `newsimg`, `newscontent`, `addtime` FROM `news` WHERE 1";
  $result = $con->query($sql);
   
  if ($result->num_rows > 0) {
      // 输出数据
      while($row = $result->fetch_assoc()) {
          echo "<br>"."newsid: " . $row["newsid"]. " - newstitle: " . $row["newstitle"];
      }
  } else {
      echo "0 结果";
  }


}
  $con->close();


  // $con = mysql_connect("localhost","root","");

  // mysql_select_db("PHPlesson", $con);
      //  mysql_query("set names 'utf8'");

    //  $result = mysql_query($sql,$con);

    //  if($result){
    //    die('Error:'.mysql_error());
    //  }else{
    //    echo 'success';
    //  }
  // mysql_close($con);
?>