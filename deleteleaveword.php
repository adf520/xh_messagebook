<?php
//包含连接数据库文件
include_once("conn.php");
//连接数据库判断通过id删除留言板中数据库，如果id为空
if(mysqli_query($conn,"delete from tb_leaveword where id='".$_GET["id"]."'")){
	//则执行弹出框留言删除成功，然后回到上个历史界面
  	echo "<script>alert('留言删除成功！');history.back();</script>";
}else{
	//否则执行弹出框留言删除失败，然后回到上个历史界面
  	echo "<script>alert('留言删除失败！');history.back();</script>";
}
?>