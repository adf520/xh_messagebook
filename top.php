<?php
//开启session会话
session_start();
//包含连接数据库
include_once("conn.php");
//包含连接功能模块
include_once("function.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>留言本</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="779" height="143" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/banner.gif"><table width="779" height="143" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="110" rowspan="2">&nbsp;</td>
		  <!--实现跑马灯效果欢迎用户登录-->
        <td height="55">&nbsp;<marquee scrollamount="2" scrolldelay="80">
		<!--判断用户是否存在，且用户名不能为空-->
			<?php
		 if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		 //满足以上条件将执行“欢迎您登录XXX”
		    echo "欢迎您登录：".$_SESSION["unc"];
		
		 }
		?></marquee>
		</td>
      </tr>
      <tr>
        <td height="55">&nbsp;</td>
      </tr>
      <tr>
        <td width="235">&nbsp;</td>
		  <!--导航栏设置-->
        <td width="544"><div align="center">&nbsp;<a href="index.php" class="a3">首&nbsp;&nbsp;页</a>&nbsp;&nbsp;<a href="reg.php" class="a3">用户注册</a>&nbsp;&nbsp;
			
			<!--检测该用户是否存在并且用户名不能为空，如果存在则执行发布留言；否则执行弹出框“请先登录本站，然后留言！”<br>
-->
			<a href="
	
			<?php
		  if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		    echo "leaveword.php";
		  
		  }else{
		    echo "javascript:alert('请先登录本站，然后留言！');";
		  
		  }
        ?>
		" 
		class="a3">发表留言</a>&nbsp;&nbsp;<a href="index.php" class="a3">查看留言</a>&nbsp;&nbsp;<a href="searchword.php" class="a3">查询留言</a>&nbsp;&nbsp;<a href="javascript:location.reload()" target="_self" class="a3">刷新页面</a>&nbsp;&nbsp;
			
			<!--SESSION授予权限，只有注册登录用户才可以正常访问该界面-->
		<a <?php 
		 if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		?>
		
		href="https://www.quanbk.cn" class="a3">券巴克</a>&nbsp;&nbsp;<a href="https://www.quanbk.cn/yy" class="a3">音乐</a>&nbsp;&nbsp;<a href="https://www.quanbk.cn/pan" class="a3">个人网盘</a>
		 &nbsp;<a href="logout.php" class="a3">退出登录</a>&nbsp;
		
		<?php
		 }
		?></div></td>
      </tr>
    </table></td>
  </tr>
</table>
