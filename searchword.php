<!--ʵ�����԰���Ϣ��ѯ����-->
<?php
//�������ݿⶥ��ģ��
include_once("top.php");
?>
<table width="779" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="292" background="images/dh_back.gif"><div align="right"><!-- ���õ�ǰ����ʱ�� -->
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
    <td width="487" background="images/dh_back.gif"><div align="center">����ǰ��λ�ã�С�����԰�&nbsp;>>&nbsp;<a href="searchword.php" class="a1">��ѯ����</a></div></td>
  </tr>
</table>
<table width="779" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="5" height="315" bgcolor="#FAF3CE"></td>
	  <!--�����������ģ��-->
    <td width="200" valign="top"><?php include_once("left.php");?></td>
    <td width="6" bgcolor="#FAF3CE"></td>
    <td  valign="top"><table width="520" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
    </table>
      <table width="550" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FCD424">
	<!--�����ѯ����-->
	 <script language="javascript">
	   function chkinput_search(form){
		   //��������͵�ֵΪ��
	     if(form.type.value==""){
			 //ִ�е�����Ի���'��ѡ���ѯ������'
		   alert('��ѡ���ѯ������');
			 //�����;۽�״̬
		   form.type.focus();
			 //��ͨ��
		   return(false);
		 }
		   //������ؼ��ʵ�ֵΪ��
		  if(form.keyword.value==""){
			 //ִ�е�����Ի���'�������ѯ�ؼ��֣�'
		   alert('�������ѯ�ؼ��֣�');
		   //���Ĺؼ��ʾ۽�״̬
		   form.keyword.focus();
			  //��ͨ��
		   return(false);
		 }
		   //ͨ��
		 return(true);
	   
	   } 
	 </script>
       <form name="form1" method="post" action="<?php echo $_SERVER["PHP_SELF"];?> " onsubmit="return chkinput_search(this)">
	    <tr>
          <td bgcolor="#FFFFFF" valign="top"><table width="550" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td background="images/dh_back_1.gif">&nbsp;&nbsp;��������</td>
            </tr>
          </table>
            <table width="550" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
				  <!--ʵ�ֲ��������б�-->
                <td><div align="center">��ѡ����ҷ�ʽ��
                  <select name="type">
				    <option value="">��ѡ��</option>
                    <option value="1">����</option>
                    <option value="2">����</option>
                    <option value="3">������</option>
                  </select>&nbsp;<input type="text" name="keyword" size="25" class="inputcss">&nbsp;<input type="submit" value="��ѯ" class="buttoncss" name="submit">
                </div></td>
              </tr>
            </table>
		
		  </td>
        </tr>
		</form>
      </table>
	  
	  
	  <?php
	    //�ж�post�ύ�����ֵ�Ƿ������post�ύ�����ֵ����Ϊ��
	   if(isset($_POST["submit"]) && $_POST["submit"]!=""){
		 //post��������͵�ֵ  
	     $type=$_POST["type"];
		  //post����Ĺؼ��ʵ�ֵ  
	     $keyword=$_POST["keyword"];
		   //���post��������͵�ֵ����1
		 if($type==1){
			//��ִ�����ݿ����� ��ѯѡ�����԰���������ݣ�����������͹ؼ�������
		  $sql=mysqli_query($conn,"select * from tb_leaveword where title like '%".$keyword."%'");
			 //�������post��������͵�ֵ����2
		 }elseif($type==2){
			 //��ִ�����ݿ����� ��ѯѡ�����԰���������ݣ����������ݺ͹ؼ�������
		  $sql=mysqli_query($conn,"select * from tb_leaveword where content like '%".$keyword."%'");
			  //�������post��������͵�ֵ����3
		 }elseif($type==3){
			 //��ִ�����ݿ����� ��ѯѡ���û����������ݣ��������û��ǳƺ͹ؼ�������
		  $sql0=mysqli_query($conn,"select id from tb_user where usernc='".$keyword."'");
			 //���ݿ��ȡ�û��ǳ�����
		  $info0=mysqli_fetch_array($sql0);
			 //�������ݿ�ѡ�����԰�������Ϣ���������û�id��id��Ϣ
		  $sql=mysqli_query($conn,"select * from tb_leaveword where userid='".$info0["id"]."'");
		 }
		 //���ݿ����û�id��id��Ϣ������Ԫ������
		 $info=mysqli_fetch_array($sql);
		   //���������Ϊfalse
		 if($info==false){
			 //����Բ���û�в��ҵ���Ҫ���ҵ����ݣ�
		  echo "<br><br><div align=center>�Բ���û�в��ҵ���Ҫ���ҵ����ݣ�</div>";
		 }else{
		   do{
			   //����ִ�в��ҵ�������Ϣ��ʾ��ͷ���û��ǳơ�id�����⡢���ݡ�ip��qq�����䣩
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
              <td background="images/dh_back_1.gif">&nbsp;��&nbsp;&nbsp;�⣺<?php echo unhtml($info["title"]);?></td>
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
	  <!--ѭ������ִ��-->
	  <?php
	     }while($info=mysqli_fetch_array($sql));
		 } 
	   }
	  
	  ?>
	  
	  
      </td>
    <td width="5" bgcolor="#FAF3CE"></td>
  </tr>
</table>
<!--�������ӵײ�ģ��-->
<?php
include_once("bottom.php");
?>
