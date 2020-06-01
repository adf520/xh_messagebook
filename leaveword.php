<!--发表留言功能实现以及布局设计-->
<?php
//包含头文件
include_once("top.php");
?>
<!--表格 宽779 高23 边框0 水平居中 单元格外边距0 单元格间隔0-->
<table width="779" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
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
	  <!--发表留言布局设计-->
    <td width="487" background="images/dh_back.gif"><div align="center">您当前的位置：小浩留言板&nbsp;>>&nbsp;<a href="leaveword.php" class="a1">发表留言</a></div></td>
  </tr>
</table>
<table width="779" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="5" height="315" bgcolor="#FAF3CE"></td>
	  <!--包含左边模块文件（登录模块、最新留言模块），整个模块布局设置宽200像素 顶部对齐-->
    <td width="200" valign="top"><?php include_once("left.php");?></td>
    <td width="6" bgcolor="#FAF3CE"></td>
    <td  valign="top"><table width="520" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
      <table width="550" height="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FCD424">
        <tr>
          <td bgcolor="#FFFFFF" valign="top"><table width="550" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td background="images/dh_back_1.gif">&nbsp;&nbsp;<img src="images/biao.gif" />&nbsp;发表留言</td>
            </tr>
          </table>
			<!--通过JavaScript实现判断发表留言功能-->  
		   <script language="javascript">
		     function chkinput(form){
				 //如果表单中主题的值为空
			  if(form.title.value==""){
				  //将执行弹出框“请输入留言主题！”
			    alert("请输入留言主题！");
				  //表单主题聚焦状态
			    form.title.focus();
				  //返回为false
				return(false);
			  }
			      //如果表单中内容的值为空
			  if(form.content.value==""){
			      //请输入留言内容！”
			    alert("请输入留言内容！");
				  //表单内容聚焦状态
				form.content.focus();
				   //返回为false
				return(false);
			  }
			  //返回为true
			  return(true);
			 }
		   
		   </script>
		  <!--发表留言布局设计-->
			  <!--表格宽500 高400 边框0 水平居中 单元格外边距为0 单元格间隔为0-->
            <table width="500" height="400" border="0" align="center" cellpadding="0" cellspacing="0">
				<!--创建表单-->
             <form name="form1" method="post" action="saveleaveword.php" onsubmit="return chkinput(this)">
			  <tr>
                <td height="30" colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td width="120" height="40"><div align="center">留言主题：</div></td>
                <td width="380">&nbsp;<input type="text" name="title" size="40" class="inputcss"></td>
              </tr>
              <tr>
                <td height="250"><div align="center">留言内容：</div></td>
				  <!--多行文本-->
                <td height="250">&nbsp;<textarea name="content" rows="15" cols="55" class="inputcss"></textarea></td>
              </tr>
              <tr>
				  <!--发表（提交按钮），重写（重置）按钮-->
                <td colspan="2"><div align="center"><input type="submit"  name="submit" value="发表" class="buttoncss">&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="重写" class="buttoncss"></div></td>
              </tr>
			  </form>
            </table></td>
        </tr>
      </table>
	  </td>
    <td width="5" bgcolor="#FAF3CE"></td>
  </tr>
</table>
<!--包含底部模块文件-->
<?php
include_once("bottom.php");
?>
