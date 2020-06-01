
<!--包含连接头部模块-->
<?php
include_once("top.php");
?>

<table width="779" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="292" background="images/dh_back.gif"><div align="right">  <!-- 设置当前日期时间 -->
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
    <td width="487" background="images/dh_back.gif"><div align="center">您当前的位置：小浩留言板&nbsp;>>&nbsp;
		<!--点击查看留言返回到首页-->
		<a href="index.php" class="a1">查看留言</a></div></td>
  </tr>
</table>
<table width="779" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="5" height="315" bgcolor="#FAF3CE"></td>
	  <!--包含连接左边模块-->
    <td width="200" valign="top"><?php include_once("left.php");?></td>
    <td width="6" bgcolor="#FAF3CE"></td>
    <td  valign="top"><table width="520" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
		<!--连接数据库，选择所有信息留言表，条件id=得到id-->
	<?php
	  $sql=mysqli_query($conn,"select * from tb_leaveword where id=".$_GET["id"]."");
	  $info=mysqli_fetch_array($sql);
	
	?>
	
      <table width="550" height="155" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FCD424">
        <tr>
          <td bgcolor="#FFFFFF" valign="top"><table width="550" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td background="images/dh_back_1.gif">&nbsp;主&nbsp;&nbsp;题：<?php echo unhtml($info["title"]);?></td>
            </tr>
          </table>
            <table width="550" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td></td>
              </tr>
            </table>
			
			<table width="550" height="120" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
				  <!--连接数据库从用户数据表中选择用户名、头像、ip、邮箱、qq，条件通过用户id匹配-->
                <td width="150" height="90"><div align="center"><img src="<?php
				 $sql1=mysqli_query($conn,"select usernc,face,ip,email,qq from tb_user where id='".$info["userid"]."'");
				 $info1=mysqli_fetch_array($sql1); 
			      echo $info1["face"];
				 
				 ?>" /><br><?php echo $info1["usernc"];?></div></td>
                <td width="10" background="images/line_down.gif"></td>
                <td width="390" rowspan="2"><?php echo unhtml($info["content"]);?></td>
              </tr>
              <tr>
                <td height="30"><div align="center"><img src="images/email.gif" width="45" height="16" alt="<?php echo $info1['email'];?>"/><img src="images/ip.gif" width="55" height="16"  alt="<?php echo $info1['ip'];?>"/><img src="images/qq.gif" width="45" height="16"  alt="<?php echo $info1['qq'];?>"/></div></td>
                <td width="10" background="images/line_down.gif"></td>
              </tr>
            </table>
			
		  </td>
        </tr>
      </table>
    </td>
    <td width="5" bgcolor="#FAF3CE"></td>
  </tr>
</table>
<!--包含连接底部模块-->
<?php
include_once("bottom.php");
?>
