
<!--��������ͷ��ģ��-->
<?php
include_once("top.php");
?>

<table width="779" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="292" background="images/dh_back.gif"><div align="right">  <!-- ���õ�ǰ����ʱ�� -->
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
    <td width="487" background="images/dh_back.gif"><div align="center">����ǰ��λ�ã�С�����԰�&nbsp;>>&nbsp;
		<!--����鿴���Է��ص���ҳ-->
		<a href="index.php" class="a1">�鿴����</a></div></td>
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
		<!--�������ݿ⣬ѡ��������Ϣ���Ա�����id=�õ�id-->
	<?php
	  $sql=mysqli_query($conn,"select * from tb_leaveword where id=".$_GET["id"]."");
	  $info=mysqli_fetch_array($sql);
	
	?>
	
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
				  <!--�������ݿ���û����ݱ���ѡ���û�����ͷ��ip�����䡢qq������ͨ���û�idƥ��-->
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
<!--�������ӵײ�ģ��-->
<?php
include_once("bottom.php");
?>
