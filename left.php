<table width="180" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
			<!--��¼ģ��-->
      <table width="190" height="100" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#94DBFF">
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><table width="190" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td background="images/dh_back_1.gif">&nbsp;&nbsp;<img src="images/biao.gif" width="10" height="9">&nbsp;�û���¼</td>
            </tr>
          </table>
            <table width="180" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
				<!--�û��ύ����û���Ϊ�գ�ִ�е����������û����������û��ǳƣ������û��ύ����û�����Ϊ�գ�ִ�е����������û����������¼���룡����
-->
             <script language="javascript">
			   function chkinputlogin(form){
			     if(form.usernc.value==""){
				   alert("�������û��ǳƣ�");
				   form.usernc.focus();
				   return(false);
				 }
				 
				  if(form.userpwd.value==""){
				   alert("�������¼���룡");
				   form.userpwd.focus();
				   return(false);
				 }
				 return(true);
			    
			   }
			 </script>
			<!--�û���¼��-->
			 <form name="form_login" method="post" action="chkuserlogin.php" onsubmit="return chkinputlogin(this)">
			  <tr>
				  <!--�û���-->
                <td width="50" height="30"><div align="center">�û�����</div></td>
                <td width="130">&nbsp;<input type="text" size="16" class="inputcss" name="usernc"></td>
              </tr>
              <tr>
				  <!--����-->
                <td height="30"><div align="center">��&nbsp;&nbsp;�룺</div></td>
                <td height="30">&nbsp;<input type="password" size="16" class="inputcss" name="userpwd"></td>
              </tr>
              <tr>
				  <!--��¼��ť�Լ���д��ť-->
                <td height="30" colspan="2"><div align="center"><input type="submit" value="��¼" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="��д" class="buttoncss" ></div></td>
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
					<!--��������ģ��-->
      <table width="190" height="183" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#98DCFF">
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><table width="190" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td background="images/dh_back_1.gif">&nbsp;&nbsp;<img src="images/biao.gif" width="10" height="9">&nbsp;��������</td>
              </tr>
          </table>
            <table width="180" height="44" border="0" align="center" cellpadding="0" cellspacing="0">
				<!--�������ݿ�Ѱ�����Ա�ѡ�����⡢id������ʱ��-->
             <?php
			   $sql=mysqli_query($conn,"select title ,id ,createtime from tb_leaveword limit 0,9");
			   $info=mysqli_fetch_array($sql); 
				//�����Ϣ����false����ִ�жԲ�����������
			   if($info==false){
			 ?>
			 
			  <tr>
                <td height="22" colspan="2"><div align="center">�Բ����������ԣ�</div></td>
              </tr>
			  <!--�����������������Ϣ�����⡢����ʱ����Ϣ��-->
			  <?php
			  }else{
			   do{
			  ?>
              <tr>
                <td width="20"><img src="images/mark_0.gif" width="10" height="10" /></td>
             
			    <td width="160" height="22"><a href="lookleaveword.php?id=<?php echo $info["id"];?>" class="a1"><?php 
				//��������ַ�����Χ��0��14�ֽڣ�
				
				 echo unhtml(msubstr($info["title"],0,14));
				   //��������ַ�������14
				 if(strlen(unhtml($info["title"]))>14)
			       {
					 //���������������
			          echo "����";
			       }
				//����ַ�����ʽ","��"/"�滻����������ʱ���ֽڷ�Χ��0��10��
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
			<!--2D��ͨ����-->
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

			  
			<!--��������-->  
	<audio  autoplay="autoplay" height="50" width="20" hidden="true">

  <source src="����ë.mp3" type="audio/mp3" />

  <source src="�һ�ױ.mp3" type="audio/mp3" />

  <embed height="50" width="50" src="����ë.mp3" />

</audio>
			</td>
        </tr>
      </table>