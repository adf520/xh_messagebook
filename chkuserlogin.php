
<!--用户登录判断-->
<?php
//开启session会话
session_start();
//包含连接数据库文件
include_once("conn.php");
//md5加密密码
md5($_POST["userpwd"]);
//数据库连接查询选择，从用户数据表中查找用户类型，条件满足用户昵称和密码
$sql=mysqli_query($conn,"select usertype from tb_user where usernc='".$_POST["usernc"]."' and userpwd='".md5(trim($_POST["userpwd"]))."'");
$info=mysqli_fetch_array($sql);
//用户名和密码不为错时，则执行弹框登录成功！否则登录失败！
if($info!=false){
	//将执行用户昵称赋值给会话用户昵称来保留数据
	$_SESSION["unc"]=$_POST["usernc"];
	//输出弹出对话框“登录成功”且返回首页
	echo "<script>alert('登录成功！');window.location.href='index.php';</script>";
}else{
	//否则弹出“登录失败”，返回上个历史记录页面
  	echo "<script>alert('登录失败！');history.back();</script>";
}
?>