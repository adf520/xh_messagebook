<!--实现留言板信息查询功能-->
<?php
//连接数据库顶部模块
include_once("top.php");
?>
<table width="779" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="292" background="images/dh_back.gif"><div align="right"><!-- 设置当前日期时间 -->
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

        ?></div></td>
    <td width="487" background="images/dh_back.gif"><div align="center">您当前的位置：小浩留言板&nbsp;>>&nbsp;<a href="searchword.php" class="a1">查询留言</a></div></td>
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
      <table width="550" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FCD424">
	<!--输入查询功能-->
	 <script language="javascript">
	   function chkinput_search(form){
		   //如果表单类型的值为空
	     if(form.type.value==""){
			 //执行弹出框对话框'请选择查询条件！'
		   alert('请选择查询条件！');
			 //表单类型聚焦状态
		   form.type.focus();
			 //不通过
		   return(false);
		 }
		   //如果表单关键词的值为空
		  if(form.keyword.value==""){
			 //执行弹出框对话框'请输入查询关键字！'
		   alert('请输入查询关键字！');
		   //表单的关键词聚焦状态
		   form.keyword.focus();
			  //不通过
		   return(false);
		 }
		   //通过
		 return(true);
	   
	   } 
	 </script>
       <form name="form1" method="post" action="<?php echo $_SERVER["PHP_SELF"];?> " onsubmit="return chkinput_search(this)">
	    <tr>
          <td bgcolor="#FFFFFF" valign="top"><table width="550" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td background="images/dh_back_1.gif">&nbsp;&nbsp;查找留言</td>
            </tr>
          </table>
            <table width="550" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
				  <!--实现查找下拉列表-->
                <td><div align="center">请选择查找方式：
                  <select name="type">
				    <option value="">请选择</option>
                    <option value="1">主题</option>
                    <option value="2">内容</option>
                    <option value="3">留言者</option>
                  </select>&nbsp;<input type="text" name="keyword" size="25" class="inputcss">&nbsp;<input type="submit" value="查询" class="buttoncss" name="submit">
                </div></td>
              </tr>
            </table>
		
		  </td>
        </tr>
		</form>
      </table>
	  
	  
	  <?php
	    //判断post提交传入的值是否存在且post提交传入的值不能为空
	   if(isset($_POST["submit"]) && $_POST["submit"]!=""){
		 //post传入的类型的值  
	     $type=$_POST["type"];
		  //post传入的关键词的值  
	     $keyword=$_POST["keyword"];
		   //如果post传入的类型的值等于1
		 if($type==1){
			//将执行数据库连接 查询选择留言板表所有数据，条件：主题和关键词任意
		  $sql=mysqli_query($conn,"select * from tb_leaveword where title like '%".$keyword."%'");
			 //否则如果post传入的类型的值等于2
		 }elseif($type==2){
			 //将执行数据库连接 查询选择留言板表所有数据，条件：内容和关键词任意
		  $sql=mysqli_query($conn,"select * from tb_leaveword where content like '%".$keyword."%'");
			  //否则如果post传入的类型的值等于3
		 }elseif($type==3){
			 //将执行数据库连接 查询选择用户表所有数据，条件：用户昵称和关键词任意
		  $sql0=mysqli_query($conn,"select id from tb_user where usernc='".$keyword."'");
			 //数据库获取用户昵称数据
		  $info0=mysqli_fetch_array($sql0);
			 //连接数据库选择留言板所有信息，条件：用户id和id信息
		  $sql=mysqli_query($conn,"select * from tb_leaveword where userid='".$info0["id"]."'");
		 }
		 //数据库获得用户id和id信息的数组元素数据
		 $info=mysqli_fetch_array($sql);
		   //如果该数据为false
		 if($info==false){
			 //输出对不起，没有查找到您要查找的内容！
		  echo "<br><br><div align=center>对不起，没有查找到您要查找的内容！</div>";
		 }else{
		   do{
			   //否则执行查找到内容信息显示（头像、用户昵称、id、主题、内容、ip、qq、邮箱）
	  ?>
	  
	  
	  <table width="520" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
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
                <td width="150" height="90"><div align="center"><img src="<?php
				 $sql1=mysqli_query($conn,"select usernc,face,ip,email,qq from tb_user where id='".$info["userid"]."'");
				 $info1=mysqli_fetch_array($sql1); 
				 echo $info1["face"];
				 
				 ?>" /><br><?php echo $info1["usernc"]; ?></div></td>
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
	  <!--循环无线执行-->
	  <?php
	     }while($info=mysqli_fetch_array($sql));
		 } 
	   }
	  
	  ?>
	  
	  
      </td>
    <td width="5" bgcolor="#FAF3CE"></td>
  </tr>
</table>
<!--包含连接底部模块-->
<?php
include_once("bottom.php");
?>
