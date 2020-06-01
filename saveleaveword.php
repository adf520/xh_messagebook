<?php
session_start();					//开启session会话
include_once("conn.php");			//包含数据库连接文件
//连接数据库从用户表中选择id查询用户昵称
$sql=mysqli_query($conn,"select id from tb_user where usernc='".$_SESSION["unc"]."'");	
$info=mysqli_fetch_array($sql);			//获取数据库需查询数据 
$userid=$info['id'];					//获取用户ID	
$createtime=date("Y-m-d H:i:s");		//获取系统当前日期时间
//判断连数据库插入留言板表中数据(用户id【用户id】、创建时间【创建时间】、主题【主题】、内容【内容】)是否存在
if(mysqli_query($conn,"insert into tb_leaveword(userid,createtime,title,content)values('$userid','$createtime','".$_POST['title']."','".$_POST['content']."')")){
	//如果存在将执行弹出框“留言发表成功”且回到上个历史记录页面
	echo "<script>alert('留言发表成功！');history.back();</script>";
}else{
	//否则执行弹出框“留言发表失败！”，且回到上个历史记录页面
  	echo "<script>alert('留言发表失败！');history.back();</script>";
}
?>