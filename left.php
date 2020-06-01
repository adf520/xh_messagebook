<table width="180" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
			<!--登录模块-->
      <table width="190" height="100" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#94DBFF">
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><table width="190" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td background="images/dh_back_1.gif">&nbsp;&nbsp;<img src="images/biao.gif" width="10" height="9">&nbsp;用户登录</td>
            </tr>
          </table>
            <table width="180" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
				<!--用户提交如果用户名为空，执行弹出框提醒用户“请输入用户昵称！”；用户提交如果用户密码为空，执行弹出框提醒用户“请输入登录密码！！”
-->
             <script language="javascript">
			   function chkinputlogin(form){
			     if(form.usernc.value==""){
				   alert("请输入用户昵称！");
				   form.usernc.focus();
				   return(false);
				 }
				 
				  if(form.userpwd.value==""){
				   alert("请输入登录密码！");
				   form.userpwd.focus();
				   return(false);
				 }
				 return(true);
			    
			   }
			 </script>
			<!--用户登录表单-->
			 <form name="form_login" method="post" action="chkuserlogin.php" onsubmit="return chkinputlogin(this)">
			  <tr>
				  <!--用户名-->
                <td width="50" height="30"><div align="center">用户名：</div></td>
                <td width="130">&nbsp;<input type="text" size="16" class="inputcss" name="usernc"></td>
              </tr>
              <tr>
				  <!--密码-->
                <td height="30"><div align="center">密&nbsp;&nbsp;码：</div></td>
                <td height="30">&nbsp;<input type="password" size="16" class="inputcss" name="userpwd"></td>
              </tr>
              <tr>
				  <!--登录按钮以及重写按钮-->
                <td height="30" colspan="2"><div align="center"><input type="submit" value="登录" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss" ></div></td>
              </tr>
			  
			  </form>
            </table></td>
        </tr>
</table>
      <table width="180" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
					<!--最新留言模块-->
      <table width="190" height="183" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#98DCFF">
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><table width="190" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td background="images/dh_back_1.gif">&nbsp;&nbsp;<img src="images/biao.gif" width="10" height="9">&nbsp;最新留言</td>
              </tr>
          </table>
            <table width="180" height="44" border="0" align="center" cellpadding="0" cellspacing="0">
				<!--连接数据库寻找留言表选择主题、id、创建时间-->
             <?php
			   $sql=mysqli_query($conn,"select title ,id ,createtime from tb_leaveword limit 0,9");
			   $info=mysqli_fetch_array($sql); 
				//如果信息等于false，将执行对不起，暂无留言
			   if($info==false){
			 ?>
			 
			  <tr>
                <td height="22" colspan="2"><div align="center">对不起，暂无留言！</div></td>
              </tr>
			  <!--否则输出最新留言信息（主题、创建时间信息）-->
			  <?php
			  }else{
			   do{
			  ?>
              <tr>
                <td width="20"><img src="images/mark_0.gif" width="10" height="10" /></td>
             
			    <td width="160" height="22"><a href="lookleaveword.php?id=<?php echo $info["id"];?>" class="a1"><?php 
				//输出主题字符串范围（0到14字节）
				
				 echo unhtml(msubstr($info["title"],0,14));
				   //如果主题字符串大于14
				 if(strlen(unhtml($info["title"]))>14)
			       {
					 //则输出……来代替
			          echo "……";
			       }
				//输出字符串格式","由"/"替换，最新留言时间字节范围（0到10）
				  echo "<font color=blue>[".str_replace("-","/",substr($info['createtime'],0,10))."]</font>";
				
				
				?></a></td>
              </tr>
			  <?php
			   }while($info=mysqli_fetch_array($sql));
			  }
			  ?>
            </table></td>
        </tr>
</table>
      <table width="180" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>
			<!--2D卡通人物-->
			<script type="text/javascript" charset="utf-8"  src="https://files.cnblogs.com/files/liuzhou1/L2Dwidget.0.min.js"></script>
    <script type="text/javascript" charset="utf-8"  src="https://files.cnblogs.com/files/liuzhou1/L2Dwidget.min.js"></script>
    <script type="text/javascript">
        L2Dwidget.init({"display": {
            "superSample": 2,
            "width": 200,
            "height": 400,
                "position": "right",
                    "hOffset": 0,
            "vOffset": 0
            }
        });
    </script>

			  
			<!--背景音乐-->  
	<audio  autoplay="autoplay" height="50" width="20" hidden="true">

  <source src="王大毛.mp3" type="audio/mp3" />

  <source src="桃花妆.mp3" type="audio/mp3" />

  <embed height="50" width="50" src="王大毛.mp3" />

</audio>
			</td>
        </tr>
      </table>