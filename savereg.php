<!--注册信息数据库操作-->
<?php
//开启session会话权限
session_start();
//包含连接数据库
 include_once("conn.php");
//用户昵称赋值绑定数据
 $usernc=$_POST["usernc"];
//数据库连接查询选择，从用户数据表中查找用户昵称
 $sql=mysqli_query($conn,"select usernc from tb_user where usernc='".$usernc."'");
//从数据库查询取出用户昵称数据
 $info=mysqli_fetch_array($sql);
//判断数据库中该用户昵称是否存在
 if($info){
	 //如果存在，则弹出对话框“对不起，你的昵称已经被占用！”并返回历史记录原来的页面
   echo "<script>alert('对不起，你的昵称已经被占用！');history.back();</script>";
	 //退出
   exit;
 }
//远程连接服务器ip地址
 $ip=$_SERVER["REMOTE_ADDR"];
//如果连接数据库查询插入用户数据库表注册数据（用户昵称【用户昵称】、用户密码【md5加密用户密码】、真实姓名【真实姓名】、邮箱【邮箱】、qq【qq】、联系电话【联系电话】、ip【远程连接服务器ip地址】、联系地址【联系地址】、头像【头像】、实时时间【date("Y-m-d H:i:s")日期时间】、性别【性别】、用户类型【0】、）
 if(mysqli_query($conn,"insert into tb_user(usernc,userpwd,truename,email,qq,tel,ip,address,face,regtime,sex,usertype) values('".$usernc."','".md5(trim($_POST["userpwd"]))."','".$_POST["truename"]."','".$_POST["email"]."','".$_POST["qq"]."','".$_POST["tel"]."','".$ip."','".$_POST["address"]."','".$_POST["face"]."','".date("Y-m-d H:i:s")."','".$_POST["sex"]."','0')")){
//如果用户昵称（session会话给用户昵称设权限）不为空时
   if($_SESSION["unc"]!=""){
	//将执行session会话自动销毁   
    session_unset();
   }
	//会话的用户昵称等于用户昵称的值时 
   $_SESSION["unc"]=$usernc;
	 //将执行弹出框注册成功，并返回历史记录页面
   echo "<script>alert('注册成功！');history.back();</script>";
 }else{
	 //否则将执行弹出框注册失败，并返回历史记录页面
   echo "<script>alert('注册失败！');history.back();</script>";
 }
?>