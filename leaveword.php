<!--�������Թ���ʵ���Լ��������-->
<?php
//����ͷ�ļ�
include_once("top.php");
?>
<!--��� ��779 ��23 �߿�0 ˮƽ���� ��Ԫ����߾�0 ��Ԫ����0-->
<table width="779" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="292" background="images/dh_back.gif"><div align="right"> 
        
        <!-- ���õ�ǰ����ʱ�� -->
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

        ?>
      </div></td>
	  <!--�������Բ������-->
    <td width="487" background="images/dh_back.gif"><div align="center">����ǰ��λ�ã�С�����԰�&nbsp;>>&nbsp;<a href="leaveword.php" class="a1">��������</a></div></td>
  </tr>
</table>
<table width="779" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="5" height="315" bgcolor="#FAF3CE"></td>
	  <!--�������ģ���ļ�����¼ģ�顢��������ģ�飩������ģ�鲼�����ÿ�200���� ��������-->
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
              <td background="images/dh_back_1.gif">&nbsp;&nbsp;<img src="images/biao.gif" />&nbsp;��������</td>
            </tr>
          </table>
			<!--ͨ��JavaScriptʵ���жϷ������Թ���-->  
		   <script language="javascript">
		     function chkinput(form){
				 //������������ֵΪ��
			  if(form.title.value==""){
				  //��ִ�е������������������⣡��
			    alert("�������������⣡");
				  //������۽�״̬
			    form.title.focus();
				  //����Ϊfalse
				return(false);
			  }
			      //����������ݵ�ֵΪ��
			  if(form.content.value==""){
			      //�������������ݣ���
			    alert("�������������ݣ�");
				  //�����ݾ۽�״̬
				form.content.focus();
				   //����Ϊfalse
				return(false);
			  }
			  //����Ϊtrue
			  return(true);
			 }
		   
		   </script>
		  <!--�������Բ������-->
			  <!--����500 ��400 �߿�0 ˮƽ���� ��Ԫ����߾�Ϊ0 ��Ԫ����Ϊ0-->
            <table width="500" height="400" border="0" align="center" cellpadding="0" cellspacing="0">
				<!--������-->
             <form name="form1" method="post" action="saveleaveword.php" onsubmit="return chkinput(this)">
			  <tr>
                <td height="30" colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td width="120" height="40"><div align="center">�������⣺</div></td>
                <td width="380">&nbsp;<input type="text" name="title" size="40" class="inputcss"></td>
              </tr>
              <tr>
                <td height="250"><div align="center">�������ݣ�</div></td>
				  <!--�����ı�-->
                <td height="250">&nbsp;<textarea name="content" rows="15" cols="55" class="inputcss"></textarea></td>
              </tr>
              <tr>
				  <!--�����ύ��ť������д�����ã���ť-->
                <td colspan="2"><div align="center"><input type="submit"  name="submit" value="����" class="buttoncss">&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="��д" class="buttoncss"></div></td>
              </tr>
			  </form>
            </table></td>
        </tr>
      </table>
	  </td>
    <td width="5" bgcolor="#FAF3CE"></td>
  </tr>
</table>
<!--�����ײ�ģ���ļ�-->
<?php
include_once("bottom.php");
?>
