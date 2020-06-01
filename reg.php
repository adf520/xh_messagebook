<!--包含连接top模块-->
<?php
include_once("top.php");
?>
<table width="779" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="292" background="images/dh_back.gif"><div align="right"> <!-- 设置当前日期时间 -->
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
    <td width="487" background="images/dh_back.gif"><div align="center">您当前的位置：小浩留言板&nbsp;>>&nbsp;<a href="reg.php" class="a1">用户注册</a></div></td>
  </tr>
</table>
<table width="779" height="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="5" height="315" bgcolor="#FAF3CE"></td>
    <td width="200" valign="top"><?php include_once("left.php");?>
	  
	    <!--卡通人物-->
	  
	  	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>  
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
	  
	  
	  </td>
    <td width="6" bgcolor="#FAF3CE"></td>
    <td  valign="top"><table width="520" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
      <table width="550" height="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FCD424">
        <tr>
          <td bgcolor="#FFFFFF" valign="top"><table width="550" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td background="images/dh_back_1.gif">&nbsp;&nbsp;<img src="images/biao.gif">&nbsp;用户注册</td>
              </tr>
            </table>
			
			 <br>
              <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1" bgcolor="#FFF09F"></td>
                </tr>
              </table>
            <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1"></td>
                </tr>
            </table>
            <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1" bgcolor="#FFF09F"></td>
                </tr>
            </table>
           
              <table width="480" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                      <font color="#0000FF">注册声明:</font>&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <br>
                    
                    （1）不得发布违法国家政治言论，煽动颠覆国家政权，推翻社会主义制度的；<br>
                    （2）不得发布黄色、博彩等垃圾广告等；<br>
                    （3）请文明用语，共创小浩留言板美好社交环境；<br><br>
                   </td>
                </tr>
            </table>
            <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1" bgcolor="#FFF09F"></td>
                </tr>
            </table>
            <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1"></td>
                </tr>
            </table>
            <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1" bgcolor="#FFF09F"></td>
                </tr>
            </table>
            <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
              
			
			 <script language="javascript">
			//用JavaScript写判断如果表单注册昵称的值为空时，则执行弹出框“请输入用户昵称！”，且昵称表单获取焦点，方便用户完成信息输入
			   function chkinput(form){
			    
				 if(form.usernc.value==""){
				   alert("请输入用户昵称！");   
				   form.usernc.focus();
				   return(false);
				 }
				 //用JavaScript写判断如果表单注册密码的值为空时，则执行弹出框“请输入注册密码！”，且昵称表单获取焦点，方便用户完成信息输入
				 if(form.userpwd.value==""){
				 
				   alert("请输入注册密码！");   
				   form.userpwd.focus();
				   return(false);
				 
				 }
				  //用JavaScript写判断如果表单注册密码的值为空时，则执行弹出框“请输入注册密码！”，且昵称表单获取焦点，方便用户完成信息输入
				  if(form.userpwd1.value==""){
				 
				   alert("请输入重复密码！");   
				   form.userpwd1.focus();
				   return(false);
				 
				 }
				   //判断如果注册表单中用户密码的值不等于确认密码的值时
				 if(form.userpwd.value!=form.userpwd1.value){
				 //将执行弹出对话框提示"密码与确认密码不同！"
				   alert("密码与确认密码不同！");   
					 //表单密码聚焦状态提示用户密码一致
				   form.userpwd.focus();
					 //不通过
				   return(false); 
				 
				 }
				 //注册表单中用户密码的值得长度小于6字符时
				 if(form.userpwd.value.length<6){
				 //将执行弹出对话框提示"密码长度应大于6位！"
				   alert("密码长度应大于6位！"); 
				//表单用户密码聚焦状态提示用户密码一致
				   form.userpwd.focus();
					 	 //不通过
				   return(false); 
				 
				 }
				 //注册表单中用户名的值为空时
				 if(form.truename.value==""){
				//将执行弹出对话框提示"请输入真实姓名！"
				   alert("请输入真实姓名！");
				//表单用户名文本框处于聚焦状态
				   form.truename.focus();
					 //不通过
				   return(false);
				 }
				  //表单中性别的值不能为空
				 if(form.sex.value==""){
				//将执行弹出对话框提示"请选择性别！"
				   alert("请选择性别！");
				 //表单中性别控件处于聚焦状态
				   form.sex.focus();
					 //不通过
				   return(false);
				 }
				 //如果表单中邮箱的值为空
				 if(form.email.value==""){
				//将执行弹出对话框提示"请输入E-mail地址!"
	               alert("请输入E-mail地址!");
				//表单中邮箱控件处于聚焦状态
	               form.email.focus();
					 //不通过
	               return(false);
	             }
				//判断用户输入邮箱是否包含"@"、"."
	             var i=form.email.value.indexOf("@");
	             var j=form.email.value.indexOf(".");
	             if((i<0)||(i-j>0)||(j<0)){
			 //如果以上多没有弹出框提醒用户"请输入正确的E-mail地址!"
                   alert("请输入正确的E-mail地址!");
					 //表单中邮箱控件处于聚焦状态
	               form.email.select();
					 	 //不通过
	               return(false);
	             }
				 //如果表单中电话的值为空时
				 if(form.tel.value==""){
					 //执行弹出框提示“请输入联系电话！”
				   alert("请输入联系电话！");
					//表单中联系电话控件处于聚焦状态
				   form.tel.focus();
					 //不通过
				   return(false);
				 } 
				 //如果检测表单中电话号码的值不为数字时
				 if(isNaN(form.tel.value)){
					 //执行提示弹出框"联系电话只能为数字！"
				   alert("联系电话只能为数字！");
					 //表单中联系电话控件处于聚焦状态
				   form.tel.focus();
					 //不通过
				   return(false);
				 }
				 //如果表单中QQ的值为空时
				 if(form.qq.value==""){
				//执行提示弹出框"请输入联系QQ！"
				   alert("请输入联系QQ！");
				 //表单中QQ控件处于聚焦状态
				   form.qq.focus();
					  //不通过
				   return(false);
				 } 
				  //如果检测表单中QQ的值不为数字时
				 if(isNaN(form.qq.value)){
				 //执行提示弹出框"QQ只能为数字！"
				   alert("QQ只能为数字！");
				//表单中QQ控件处于聚焦状态
				   form.qq.focus();
					  //不通过
				   return(false);
				 }
				 
				 
				   	//如果表单中联系地址的值为空时
			     if(form.address.value==""){
					 //执行提示弹出框"请输入联系地址！"
				   alert("请输入联系地址！");
					 //表单中联系地址处于聚焦状态
				   form.address.focus();
					 //不通过
				   return(false);
				 } 
			     //通过
			    return(true);
			     
			   }
			  
			  </script>
			
			
			
			
			  
			  <form name="form1" method="post" action="savereg.php" onSubmit="return chkinput(this)">
			    <tr>
                  <td width="110" height="30"><div align="center">用户昵称：</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--用户昵称文本类型表单-->
                      <input type="text" name="usernc" size="25" class="inputcss" placeholder="请您输入用户昵称"></td>
                </tr>
				 <tr>
                  <td width="110" height="30"><div align="center">密&nbsp;&nbsp;码：</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--用户密码密码类型表单-->
                      <input type="password" name="userpwd" size="25" class="inputcss" placeholder="请您输入用户密码"></td>
                </tr>
				 <tr>
                  <td width="110" height="30"><div align="center">重复密码：</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--再次输入用户密码密码类型表单--->
                      <input type="password" name="userpwd1" size="25" class="inputcss"placeholder="请您再次输入您的用户密码"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">姓名：</div></td>
                  <td height="30" colspan="2">&nbsp;
					   <!--用户姓名文本类型表单--->
                      <input type="text" name="truename" size="25" class="inputcss" placeholder="请输入您的姓名"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">性&nbsp;&nbsp;别：</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--下拉列表实现表单性别选择-->
                      <select name="sex">
                        <option value="">请选择</option>
                        <option value="男">男</option>
                        <option value="女">女</option>
                      </select>                  </td>
                </tr>
                <tr>
                  <td height="30"><div align="center">E-mail地址：</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--用户邮箱email类型表单--->
                      <input type="text" name="email" size="25" class="inputcss"placeholder="请输入您邮箱地址"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">联系电话：</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--联系电话文本类型表单--->
                      <input type="text" name="tel" size="25" class="inputcss"placeholder="请输入您的联系电话"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">QQ号码：</div></td>
                  <td height="30" colspan="2">&nbsp;
					   <!--QQ号码文本类型表单--->
                      <input type="text" name="qq" size="25" class="inputcss"placeholder="请输入您的QQ号码"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">头像选择：</div></td>
                  <td width="90" height="30">&nbsp;
					  <!--下拉列表实现表单头像选择-->
				  <select name="face" onchange="form1.user_face.src=this.value">
					  <!--循环序号（头像名为数字）解决头像输出-->
                      <?php
					  for($i=0;$i<=7;$i++){
					  ?>
					   <option value="<?php echo "images/face/".$i.".gif"?>"><?php echo $i.".gif"?></option>
					  <?php
					  }
					  ?>
                  </select></td>
                  <td width="280">
                  <div align="left"><img id=user_face src="images/face/0.gif" width="60" height="60"></div></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">联系地址：</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--实现表单联系电话文本输入框，-->
                      <input type="text" name="address" size="35" class="inputcss"placeholder="请输入您的联系地址"></td>
                </tr>
                <tr>
                  <td height="45" colspan="3"><div align="center">
					  <!--实现注册按钮（提交类型）功能-->
                    <input name="submit" type="submit" class="buttoncss" value="注册">
                    &nbsp;&nbsp;&nbsp;
					   <!--实现重写按钮（重置类型）功能-->
                    <input name="reset" type="reset" class="buttoncss" value="重写">
                  </div></td>
                </tr>
		      </form>
				
            </table></td>
        </tr>
      </table></td>
    <td width="5" bgcolor="#FAF3CE"></td>
  </tr>
</table>
s
<!--连接底部模块-->
<?php
include_once("bottom.php");
?>
