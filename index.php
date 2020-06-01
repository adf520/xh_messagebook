<!DOCTYPE html>
<html>
<head>
<title>小浩留言板</title>
	 <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php
include_once "top.php"; //导入头部模块文件
?>
<!-- 创建表格：设置宽为779 高23 边框为0 水平居中 单元格边距0 单元格间距0 -->
<table width="779" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <!-- 单元格样式设置：宽292 背景图dh_back.gif 位置右  -->
    <td width="292" background="images/dh_back.gif"><div align="right"> 
        
        <!-- 设置当前日期时间 -->
        <?php
        header( 'Content-type:text/html;charset:gb2312' );
        date_default_timezone_set( 'PRC' ); //当前时区为中华人民共和国时间
        //通过多分支选择设置周期
        $w = date( 'w' );
        switch ( $w ) {
          // 当日期为0时，输出当前日期时间+星期天
          case '0':
            echo "今天是：" . date( "Y年n月j日  H:i:s" ) . "  星期天";
            break;
            // 当日期为1时，输出当前日期时间+星期一
          case '1':
            echo "今天是：" . date( "Y年n月j日  H:i:s" ) . "  星期一";
            break;
            // 当日期为2时，输出当前日期时间+星期二
          case '2':
            echo "今天是：" . date( "Y年n月j日  H:i:s" ) . "  星期二";
            break;
            // 当日期为3时，输出当前日期时间+星期三
          case '3':
            echo "今天是：" . date( "Y年n月j日  H:i:s" ) . "  星期三";
            break;
            // 当日期为4时，输出当前日期时间+星期四
          case '4':
            echo "今天是：" . date( "Y年n月j日  H:i:s" ) . "  星期四";
            break;
            // 当日期为5时，输出当前日期时间+星期五
          case '5':
            echo "今天是：" . date( "Y年n月j日  H:i:s" ) . "  星期五";
            break;
            // 当日期为6时，输出当前日期时间+星期六
          case '6':
            echo "今天是：" . date( "Y年n月j日  H:i:s" ) . "  星期六";
            break;
            // 以上日期时间都不是，则默认输出的是“不在指定周期范围内！”
          default:
            echo "不在指定周期范围内！";
            break;
        }

        ?>
      </div></td>
    <!-- 设置当前的位置为首页（超链接）提醒用户 -->
    <td width="487" background="images/dh_back.gif"><div align="center">您当前的位置：小浩留言板&nbsp;>>&nbsp;<a href="index.php" class="a1">首&nbsp;&nbsp;页</a></div></td>
  </tr>
</table>
<table width="779" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <!-- 设置页面左支柱（蓝色） -->
    <td width="5" height="315" bgcolor="#95DAFF"></td>
    <!--导入左边模块（用户登录和最新留言）文件  -->
    <td width="200" valign="top"><?php include_once "left.php";?>
	 
		<!--背景音乐-->
	<audio  autoplay="autoplay" height="50" width="20" hidden="true">

  <source src="王大毛.mp3" type="audio/mp3" />

  <source src="桃花妆.mp3" type="audio/mp3" />

  <embed height="50" width="50" src="王大毛.mp3" />

</audio>
	  

	  
	  
	  <!--卡通人物-->
	  
	  	  
	<div class="waifu">
        <div class="waifu-tips"></div>
        <canvas id="live2d" width="200" height="150" class="live2d"></canvas>
        <div class="waifu-tool">
            <span class="fui-home"></span>
            <span class="fui-chat"></span>
            <span class="fui-eye"></span>
            <span class="fui-user"></span>
            <span class="fui-photo"></span>
            <span class="fui-info-circle"></span>
            <span class="fui-cross"></span>
        </div>
    </div>
        
    <script src="assets/waifu-tips.js"></script>
    <script src="assets/live2d.js"></script>
    <script type="text/javascript">initModel("assets/")</script>		  	  
	  </td>	
	  
	  
	  
	  
	  
	  
	  

    <!-- 设置页面右支柱（蓝色） -->
    <td width="6" bgcolor="#95DAFF"></td>
    <td  valign="top"><!-- 留言板数据以及分页设置 -->
      
      <?php
      // 连接数据库查询tb_leaveword(留言表)记录总数
      $sql = mysqli_query( $conn, "select count(*) as total from tb_leaveword " );
      // 从数据库tb_leaveword(留言表)取出记录个数
      $info = mysqli_fetch_array( $sql );
      $total = $info[ 'total' ]; //获取总留言条数
      // 如果总留言条数为0，则给出提示
      if ( $total == 0 ) {
        // 水平居中输出“ 对不起，暂无留言！”
        echo "<div align=center>对不起，暂无留言！</div>";
      } else {
        // 否则有记录，则判断检测查询字符串page的值是否为空
        if ( !isset( $_GET[ "page" ] ) || !is_numeric( $_GET[ "page" ] ) ) {
          // 如果为空则，页数为1（默认第1页）
          $page = 1;
        } else {
          // 页数为当前页数
          $page = intval( $_GET[ "page" ] );
        }

        // 设置留言清单3条留言记录为1页
        $pagesize = 3; //规定每页显示3条留言
        // 获取总页数
        if ( $total % $pagesize == 0 ) {
          // 能被整除页的个数
          $pagecount = intval( $total / $pagesize );
        } else {
          //强制取整页的个数
          $pagecount = ceil( $total / $pagesize );
        }

        $sql = mysqli_query( $conn, "select * from tb_leaveword order by createtime desc limit " . ( $page - 1 ) * $pagesize . ",$pagesize  " );

        //通过while循环显示所有留言
        while ( $info = mysqli_fetch_array( $sql ) ) {

          ?>
      
      <!-- 通过表格嵌套布局来实现留言布局设计 -->
      
      <table width="520" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="550" height="155" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#95DAFF">
        <tr>
          <td bgcolor="#FFFFFF" valign="top"><table width="550" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr> 
                <!-- 留言板主题设计 -->
                <td width="450" background="images/dh_back_1.gif">&nbsp;主&nbsp;&nbsp;题：<?php echo unhtml($info["title"]); ?></td>
                <td width="100" background="images/dh_back_1.gif"><div align="center"> 
                    
                    <!-- 通过JavaScript实现留言编辑弹出框 --> 
                    <script language="javascript">
			    function openeditwindow(x){

				   window.open("editleaveword.php?id="+x,"newframe","top=100,left=200,width=450,height=280,menubar=no,location=no,scrollbars=no,status=no");

				}

			  </script> 
                    
                    <!-- 连接查询数据库用户的id -->
                    <?php
                    $sqlu = mysqli_query( $conn, "select usernc from tb_user where id='" . $info[ "userid" ] . "'" );
                    $infou = mysqli_fetch_array( $sqlu );
                    // 判断登录用户是否为留言的发表者，如果是，则显示编辑按钮
                    if ( isset( $_SESSION[ "unc" ] ) && $infou[ "usernc" ] == $_SESSION[ "unc" ] ) {
                      ?>
                    <!-- 通过超链接调用JavaScript编辑弹出框功能 --> 
                    <a href="javascript:openeditwindow(<?php echo $info['id']; ?>)" class="a1">编辑</a> <a href="javascript:if(window.confirm('确定删除该留言信息么？')==true){window.location.href='deleteleaveword.php?id=<?php echo $info['id']; ?>';}" class="a1">删除</a>
                    <?php
                    }
                    ?>
                    &nbsp; 
                    
                    <!-- 管理员实现权限 -->
                    <?php
                    // 检测该用户是否是管理员
                    if ( isset( $_SESSION[ "unc" ] ) ) {
                      // 连接数据库查询用户类型表中查询管理员信息
                      $sqld = mysqli_query( $conn, "select usertype from tb_user where usernc='" . $_SESSION[ "unc" ] . "'" );
                      $infod = mysqli_fetch_array( $sqld );
                      // 如果是管理
                      if ( $infod[ "usertype" ] == 1 ) {
                        ?>
                    <!-- 将用户留言删除（通过查询数据库后台查询留言板id对应删除记录） --> 
                    <a href="javascript:if(window.confirm('确定删除该留言信息么？')==true){window.location.href='deleteleaveword.php?id=<?php echo $info['id']; ?>';}" class="a1">删除</a>
                    <?php
                    }
                    }
                    ?>
                    
                    <!-- 表格嵌套 --> 
                    
                  </div></td>
              </tr>
            </table>
            <table width="550" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td></td>
              </tr>
            </table>
            <table width="550" height="120" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="150" height="90"><div align="center"> 
                    
                    <!-- 连接数据库通过ip查询选择用户信息 ：用户名、头像、ip、邮箱、QQ--> 
                    <img src="<?php
$sql1 = mysqli_query($conn, "select usernc,face,ip,email,qq from tb_user where id='" . $info["userid"] . "'");
		$info1 = mysqli_fetch_array($sql1);
		// 显示用户头像
		echo $info1["face"];

		?>" /><br>
                    <!-- 输出显示用户名 --> 
                    <?php echo $info1["usernc"]; ?></div></td>
                <td width="10" background="images/line_down.gif"></td>
                <td width="390" rowspan="2"><!-- 输出留言板内容 --> 
                  <?php echo unhtml($info["content"]); ?></td>
              </tr>
              <tr> 
                <!-- 输出邮箱、ip、qq -->
                <td height="30"><div align="center"><img src="images/email.gif" width="45" height="16" alt="<?php echo $info1['email']; ?>"/><img src="images/ip.gif" width="55" height="16"  alt="<?php echo $info1['ip']; ?>"/><img src="images/qq.gif" width="45" height="16"  alt="<?php echo $info1['qq']; ?>"/></div></td>
                <td width="10" background="images/line_down.gif"></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <?php
      }
      }
      ?>
      <table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <!-- 显示页数以及翻页功能实现 -->
          <td width="351"><div align="left">共有留言&nbsp;<?php echo $total; ?>&nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize; ?>&nbsp;条&nbsp;第&nbsp;<?php echo $page; ?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页</div></td>
          
          <!-- 实现上一页效果 -->
          
          <td width="199"><div align="right"><a href="<?php echo $_SERVER['PHP_SELF'] ?>?page=1" class="a1">首页</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"] ?>?page=<?php

// 首页与尾页的实现

// 如果页数大于1
if ($page > 1) {
	// 当前页面为尾页
	echo $page - 1;
} else {
	//否则当前页面为首页
	echo 1;
}

// 上一页设置
?>" class="a1">上一页</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"] ?>?page=<?php
// 如果当前页小于总页数时
if ($page < $pagecount) {
	// 执行页数+1
	echo $page + 1;
} else {
	// 否则为总页数
	echo $pagecount;
}
// 下一页的实现以及尾页
?>" class="a1">下一页</a>&nbsp;<a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $pagecount; ?>" class="a1">尾页</a></div></td>
        </tr>
      </table></td>
    <td width="5" bgcolor="#95DAFF"></td>
  </tr>
</table>
			  

			  
			  
			  
<?php
//包含底部文件
include_once "bottom.php";
?>

</body>
</html>