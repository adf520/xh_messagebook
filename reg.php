<!--��������topģ��-->
<?php
include_once("top.php");
?>
<table width="779" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="292" background="images/dh_back.gif"><div align="right"> <!-- ���õ�ǰ����ʱ�� -->
        <?php
        header( 'Content-type:text/html;charset:gb2312' );
        date_default_timezone_set( 'PRC' ); //��ǰʱ��Ϊ�л����񹲺͹�ʱ��
        //ͨ�����֧ѡ����������
        $w = date( 'w' );
        switch ( $w ) {
          // ������Ϊ0ʱ�������ǰ����ʱ��+������
          case '0':
            echo "�����ǣ�" . date( "Y��n��j��  H:i:s" ) . "  ������";
            break;
            // ������Ϊ1ʱ�������ǰ����ʱ��+����һ
          case '1':
            echo "�����ǣ�" . date( "Y��n��j��  H:i:s" ) . "  ����һ";
            break;
            // ������Ϊ2ʱ�������ǰ����ʱ��+���ڶ�
          case '2':
            echo "�����ǣ�" . date( "Y��n��j��  H:i:s" ) . "  ���ڶ�";
            break;
            // ������Ϊ3ʱ�������ǰ����ʱ��+������
          case '3':
            echo "�����ǣ�" . date( "Y��n��j��  H:i:s" ) . "  ������";
            break;
            // ������Ϊ4ʱ�������ǰ����ʱ��+������
          case '4':
            echo "�����ǣ�" . date( "Y��n��j��  H:i:s" ) . "  ������";
            break;
            // ������Ϊ5ʱ�������ǰ����ʱ��+������
          case '5':
            echo "�����ǣ�" . date( "Y��n��j��  H:i:s" ) . "  ������";
            break;
            // ������Ϊ6ʱ�������ǰ����ʱ��+������
          case '6':
            echo "�����ǣ�" . date( "Y��n��j��  H:i:s" ) . "  ������";
            break;
            // ��������ʱ�䶼���ǣ���Ĭ��������ǡ�����ָ�����ڷ�Χ�ڣ���
          default:
            echo "����ָ�����ڷ�Χ�ڣ�";
            break;
        }

        ?></div></td>
    <td width="487" background="images/dh_back.gif"><div align="center">����ǰ��λ�ã�С�����԰�&nbsp;>>&nbsp;<a href="reg.php" class="a1">�û�ע��</a></div></td>
  </tr>
</table>
<table width="779" height="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="5" height="315" bgcolor="#FAF3CE"></td>
    <td width="200" valign="top"><?php include_once("left.php");?>
	  
	    <!--��ͨ����-->
	  
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
                <td background="images/dh_back_1.gif">&nbsp;&nbsp;<img src="images/biao.gif">&nbsp;�û�ע��</td>
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
                      <font color="#0000FF">ע������:</font>&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    <br>
                    
                    ��1�����÷���Υ�������������ۣ�ɿ���߸�������Ȩ���Ʒ���������ƶȵģ�<br>
                    ��2�����÷�����ɫ�����ʵ��������ȣ�<br>
                    ��3���������������С�����԰������罻������<br><br>
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
			//��JavaScriptд�ж������ע���ǳƵ�ֵΪ��ʱ����ִ�е������������û��ǳƣ��������ǳƱ���ȡ���㣬�����û������Ϣ����
			   function chkinput(form){
			    
				 if(form.usernc.value==""){
				   alert("�������û��ǳƣ�");   
				   form.usernc.focus();
				   return(false);
				 }
				 //��JavaScriptд�ж������ע�������ֵΪ��ʱ����ִ�е�����������ע�����룡�������ǳƱ���ȡ���㣬�����û������Ϣ����
				 if(form.userpwd.value==""){
				 
				   alert("������ע�����룡");   
				   form.userpwd.focus();
				   return(false);
				 
				 }
				  //��JavaScriptд�ж������ע�������ֵΪ��ʱ����ִ�е�����������ע�����룡�������ǳƱ���ȡ���㣬�����û������Ϣ����
				  if(form.userpwd1.value==""){
				 
				   alert("�������ظ����룡");   
				   form.userpwd1.focus();
				   return(false);
				 
				 }
				   //�ж����ע������û������ֵ������ȷ�������ֵʱ
				 if(form.userpwd.value!=form.userpwd1.value){
				 //��ִ�е����Ի�����ʾ"������ȷ�����벻ͬ��"
				   alert("������ȷ�����벻ͬ��");   
					 //������۽�״̬��ʾ�û�����һ��
				   form.userpwd.focus();
					 //��ͨ��
				   return(false); 
				 
				 }
				 //ע������û������ֵ�ó���С��6�ַ�ʱ
				 if(form.userpwd.value.length<6){
				 //��ִ�е����Ի�����ʾ"���볤��Ӧ����6λ��"
				   alert("���볤��Ӧ����6λ��"); 
				//���û�����۽�״̬��ʾ�û�����һ��
				   form.userpwd.focus();
					 	 //��ͨ��
				   return(false); 
				 
				 }
				 //ע������û�����ֵΪ��ʱ
				 if(form.truename.value==""){
				//��ִ�е����Ի�����ʾ"��������ʵ������"
				   alert("��������ʵ������");
				//���û����ı����ھ۽�״̬
				   form.truename.focus();
					 //��ͨ��
				   return(false);
				 }
				  //�����Ա��ֵ����Ϊ��
				 if(form.sex.value==""){
				//��ִ�е����Ի�����ʾ"��ѡ���Ա�"
				   alert("��ѡ���Ա�");
				 //�����Ա�ؼ����ھ۽�״̬
				   form.sex.focus();
					 //��ͨ��
				   return(false);
				 }
				 //������������ֵΪ��
				 if(form.email.value==""){
				//��ִ�е����Ի�����ʾ"������E-mail��ַ!"
	               alert("������E-mail��ַ!");
				//��������ؼ����ھ۽�״̬
	               form.email.focus();
					 //��ͨ��
	               return(false);
	             }
				//�ж��û����������Ƿ����"@"��"."
	             var i=form.email.value.indexOf("@");
	             var j=form.email.value.indexOf(".");
	             if((i<0)||(i-j>0)||(j<0)){
			 //������϶�û�е����������û�"��������ȷ��E-mail��ַ!"
                   alert("��������ȷ��E-mail��ַ!");
					 //��������ؼ����ھ۽�״̬
	               form.email.select();
					 	 //��ͨ��
	               return(false);
	             }
				 //������е绰��ֵΪ��ʱ
				 if(form.tel.value==""){
					 //ִ�е�������ʾ����������ϵ�绰����
				   alert("��������ϵ�绰��");
					//������ϵ�绰�ؼ����ھ۽�״̬
				   form.tel.focus();
					 //��ͨ��
				   return(false);
				 } 
				 //��������е绰�����ֵ��Ϊ����ʱ
				 if(isNaN(form.tel.value)){
					 //ִ����ʾ������"��ϵ�绰ֻ��Ϊ���֣�"
				   alert("��ϵ�绰ֻ��Ϊ���֣�");
					 //������ϵ�绰�ؼ����ھ۽�״̬
				   form.tel.focus();
					 //��ͨ��
				   return(false);
				 }
				 //�������QQ��ֵΪ��ʱ
				 if(form.qq.value==""){
				//ִ����ʾ������"��������ϵQQ��"
				   alert("��������ϵQQ��");
				 //����QQ�ؼ����ھ۽�״̬
				   form.qq.focus();
					  //��ͨ��
				   return(false);
				 } 
				  //���������QQ��ֵ��Ϊ����ʱ
				 if(isNaN(form.qq.value)){
				 //ִ����ʾ������"QQֻ��Ϊ���֣�"
				   alert("QQֻ��Ϊ���֣�");
				//����QQ�ؼ����ھ۽�״̬
				   form.qq.focus();
					  //��ͨ��
				   return(false);
				 }
				 
				 
				   	//���������ϵ��ַ��ֵΪ��ʱ
			     if(form.address.value==""){
					 //ִ����ʾ������"��������ϵ��ַ��"
				   alert("��������ϵ��ַ��");
					 //������ϵ��ַ���ھ۽�״̬
				   form.address.focus();
					 //��ͨ��
				   return(false);
				 } 
			     //ͨ��
			    return(true);
			     
			   }
			  
			  </script>
			
			
			
			
			  
			  <form name="form1" method="post" action="savereg.php" onSubmit="return chkinput(this)">
			    <tr>
                  <td width="110" height="30"><div align="center">�û��ǳƣ�</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--�û��ǳ��ı����ͱ�-->
                      <input type="text" name="usernc" size="25" class="inputcss" placeholder="���������û��ǳ�"></td>
                </tr>
				 <tr>
                  <td width="110" height="30"><div align="center">��&nbsp;&nbsp;�룺</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--�û������������ͱ�-->
                      <input type="password" name="userpwd" size="25" class="inputcss" placeholder="���������û�����"></td>
                </tr>
				 <tr>
                  <td width="110" height="30"><div align="center">�ظ����룺</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--�ٴ������û������������ͱ�--->
                      <input type="password" name="userpwd1" size="25" class="inputcss"placeholder="�����ٴ����������û�����"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">������</div></td>
                  <td height="30" colspan="2">&nbsp;
					   <!--�û������ı����ͱ�--->
                      <input type="text" name="truename" size="25" class="inputcss" placeholder="��������������"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">��&nbsp;&nbsp;��</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--�����б�ʵ�ֱ��Ա�ѡ��-->
                      <select name="sex">
                        <option value="">��ѡ��</option>
                        <option value="��">��</option>
                        <option value="Ů">Ů</option>
                      </select>                  </td>
                </tr>
                <tr>
                  <td height="30"><div align="center">E-mail��ַ��</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--�û�����email���ͱ�--->
                      <input type="text" name="email" size="25" class="inputcss"placeholder="�������������ַ"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">��ϵ�绰��</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--��ϵ�绰�ı����ͱ�--->
                      <input type="text" name="tel" size="25" class="inputcss"placeholder="������������ϵ�绰"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">QQ���룺</div></td>
                  <td height="30" colspan="2">&nbsp;
					   <!--QQ�����ı����ͱ�--->
                      <input type="text" name="qq" size="25" class="inputcss"placeholder="����������QQ����"></td>
                </tr>
                <tr>
                  <td height="30"><div align="center">ͷ��ѡ��</div></td>
                  <td width="90" height="30">&nbsp;
					  <!--�����б�ʵ�ֱ�ͷ��ѡ��-->
				  <select name="face" onchange="form1.user_face.src=this.value">
					  <!--ѭ����ţ�ͷ����Ϊ���֣����ͷ�����-->
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
                  <td height="30"><div align="center">��ϵ��ַ��</div></td>
                  <td height="30" colspan="2">&nbsp;
					  <!--ʵ�ֱ���ϵ�绰�ı������-->
                      <input type="text" name="address" size="35" class="inputcss"placeholder="������������ϵ��ַ"></td>
                </tr>
                <tr>
                  <td height="45" colspan="3"><div align="center">
					  <!--ʵ��ע�ᰴť���ύ���ͣ�����-->
                    <input name="submit" type="submit" class="buttoncss" value="ע��">
                    &nbsp;&nbsp;&nbsp;
					   <!--ʵ����д��ť���������ͣ�����-->
                    <input name="reset" type="reset" class="buttoncss" value="��д">
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
<!--���ӵײ�ģ��-->
<?php
include_once("bottom.php");
?>
