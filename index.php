<!DOCTYPE html>
<html>
<head>
<title>С�����԰�</title>
	 <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php
include_once "top.php"; //����ͷ��ģ���ļ�
?>
<!-- ����������ÿ�Ϊ779 ��23 �߿�Ϊ0 ˮƽ���� ��Ԫ��߾�0 ��Ԫ����0 -->
<table width="779" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <!-- ��Ԫ����ʽ���ã���292 ����ͼdh_back.gif λ����  -->
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
    <!-- ���õ�ǰ��λ��Ϊ��ҳ�������ӣ������û� -->
    <td width="487" background="images/dh_back.gif"><div align="center">����ǰ��λ�ã�С�����԰�&nbsp;>>&nbsp;<a href="index.php" class="a1">��&nbsp;&nbsp;ҳ</a></div></td>
  </tr>
</table>
<table width="779" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <!-- ����ҳ����֧������ɫ�� -->
    <td width="5" height="315" bgcolor="#95DAFF"></td>
    <!--�������ģ�飨�û���¼���������ԣ��ļ�  -->
    <td width="200" valign="top"><?php include_once "left.php";?>
	 
		<!--��������-->
	<audio  autoplay="autoplay" height="50" width="20" hidden="true">

  <source src="����ë.mp3" type="audio/mp3" />

  <source src="�һ�ױ.mp3" type="audio/mp3" />

  <embed height="50" width="50" src="����ë.mp3" />

</audio>
	  

	  
	  
	  <!--��ͨ����-->
	  
	  	  
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
	  
	  
	  
	  
	  
	  
	  

    <!-- ����ҳ����֧������ɫ�� -->
    <td width="6" bgcolor="#95DAFF"></td>
    <td  valign="top"><!-- ���԰������Լ���ҳ���� -->
      
      <?php
      // �������ݿ��ѯtb_leaveword(���Ա�)��¼����
      $sql = mysqli_query( $conn, "select count(*) as total from tb_leaveword " );
      // �����ݿ�tb_leaveword(���Ա�)ȡ����¼����
      $info = mysqli_fetch_array( $sql );
      $total = $info[ 'total' ]; //��ȡ����������
      // �������������Ϊ0���������ʾ
      if ( $total == 0 ) {
        // ˮƽ��������� �Բ����������ԣ���
        echo "<div align=center>�Բ����������ԣ�</div>";
      } else {
        // �����м�¼�����жϼ���ѯ�ַ���page��ֵ�Ƿ�Ϊ��
        if ( !isset( $_GET[ "page" ] ) || !is_numeric( $_GET[ "page" ] ) ) {
          // ���Ϊ����ҳ��Ϊ1��Ĭ�ϵ�1ҳ��
          $page = 1;
        } else {
          // ҳ��Ϊ��ǰҳ��
          $page = intval( $_GET[ "page" ] );
        }

        // ���������嵥3�����Լ�¼Ϊ1ҳ
        $pagesize = 3; //�涨ÿҳ��ʾ3������
        // ��ȡ��ҳ��
        if ( $total % $pagesize == 0 ) {
          // �ܱ�����ҳ�ĸ���
          $pagecount = intval( $total / $pagesize );
        } else {
          //ǿ��ȡ��ҳ�ĸ���
          $pagecount = ceil( $total / $pagesize );
        }

        $sql = mysqli_query( $conn, "select * from tb_leaveword order by createtime desc limit " . ( $page - 1 ) * $pagesize . ",$pagesize  " );

        //ͨ��whileѭ����ʾ��������
        while ( $info = mysqli_fetch_array( $sql ) ) {

          ?>
      
      <!-- ͨ�����Ƕ�ײ�����ʵ�����Բ������ -->
      
      <table width="520" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="550" height="155" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#95DAFF">
        <tr>
          <td bgcolor="#FFFFFF" valign="top"><table width="550" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr> 
                <!-- ���԰�������� -->
                <td width="450" background="images/dh_back_1.gif">&nbsp;��&nbsp;&nbsp;�⣺<?php echo unhtml($info["title"]); ?></td>
                <td width="100" background="images/dh_back_1.gif"><div align="center"> 
                    
                    <!-- ͨ��JavaScriptʵ�����Ա༭������ --> 
                    <script language="javascript">
			    function openeditwindow(x){

				   window.open("editleaveword.php?id="+x,"newframe","top=100,left=200,width=450,height=280,menubar=no,location=no,scrollbars=no,status=no");

				}

			  </script> 
                    
                    <!-- ���Ӳ�ѯ���ݿ��û���id -->
                    <?php
                    $sqlu = mysqli_query( $conn, "select usernc from tb_user where id='" . $info[ "userid" ] . "'" );
                    $infou = mysqli_fetch_array( $sqlu );
                    // �жϵ�¼�û��Ƿ�Ϊ���Եķ����ߣ�����ǣ�����ʾ�༭��ť
                    if ( isset( $_SESSION[ "unc" ] ) && $infou[ "usernc" ] == $_SESSION[ "unc" ] ) {
                      ?>
                    <!-- ͨ�������ӵ���JavaScript�༭�������� --> 
                    <a href="javascript:openeditwindow(<?php echo $info['id']; ?>)" class="a1">�༭</a> <a href="javascript:if(window.confirm('ȷ��ɾ����������Ϣô��')==true){window.location.href='deleteleaveword.php?id=<?php echo $info['id']; ?>';}" class="a1">ɾ��</a>
                    <?php
                    }
                    ?>
                    &nbsp; 
                    
                    <!-- ����Աʵ��Ȩ�� -->
                    <?php
                    // �����û��Ƿ��ǹ���Ա
                    if ( isset( $_SESSION[ "unc" ] ) ) {
                      // �������ݿ��ѯ�û����ͱ��в�ѯ����Ա��Ϣ
                      $sqld = mysqli_query( $conn, "select usertype from tb_user where usernc='" . $_SESSION[ "unc" ] . "'" );
                      $infod = mysqli_fetch_array( $sqld );
                      // ����ǹ���
                      if ( $infod[ "usertype" ] == 1 ) {
                        ?>
                    <!-- ���û�����ɾ����ͨ����ѯ���ݿ��̨��ѯ���԰�id��Ӧɾ����¼�� --> 
                    <a href="javascript:if(window.confirm('ȷ��ɾ����������Ϣô��')==true){window.location.href='deleteleaveword.php?id=<?php echo $info['id']; ?>';}" class="a1">ɾ��</a>
                    <?php
                    }
                    }
                    ?>
                    
                    <!-- ���Ƕ�� --> 
                    
                  </div></td>
              </tr>
            </table>
            <table width="550" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td></td>
              </tr>
            </table>
            <table width="550" height="120" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="150" height="90"><div align="center"> 
                    
                    <!-- �������ݿ�ͨ��ip��ѯѡ���û���Ϣ ���û�����ͷ��ip�����䡢QQ--> 
                    <img src="<?php
$sql1 = mysqli_query($conn, "select usernc,face,ip,email,qq from tb_user where id='" . $info["userid"] . "'");
		$info1 = mysqli_fetch_array($sql1);
		// ��ʾ�û�ͷ��
		echo $info1["face"];

		?>" /><br>
                    <!-- �����ʾ�û��� --> 
                    <?php echo $info1["usernc"]; ?></div></td>
                <td width="10" background="images/line_down.gif"></td>
                <td width="390" rowspan="2"><!-- ������԰����� --> 
                  <?php echo unhtml($info["content"]); ?></td>
              </tr>
              <tr> 
                <!-- ������䡢ip��qq -->
                <td height="30"><div align="center"><img src="images/email.gif" width="45" height="16" alt="<?php echo $info1['email']; ?>"/><img src="images/ip.gif" width="55" height="16"  alt="<?php echo $info1['ip']; ?>"/><img src="images/qq.gif" width="45" height="16"  alt="<?php echo $info1['qq']; ?>"/></div></td>
                <td width="10" background="images/line_down.gif"></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <?php
      }
      }
      ?>
      <table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <!-- ��ʾҳ���Լ���ҳ����ʵ�� -->
          <td width="351"><div align="left">��������&nbsp;<?php echo $total; ?>&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize; ?>&nbsp;��&nbsp;��&nbsp;<?php echo $page; ?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount; ?>&nbsp;ҳ</div></td>
          
          <!-- ʵ����һҳЧ�� -->
          
          <td width="199"><div align="right"><a href="<?php echo $_SERVER['PHP_SELF'] ?>?page=1" class="a1">��ҳ</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"] ?>?page=<?php

// ��ҳ��βҳ��ʵ��

// ���ҳ������1
if ($page > 1) {
	// ��ǰҳ��Ϊβҳ
	echo $page - 1;
} else {
	//����ǰҳ��Ϊ��ҳ
	echo 1;
}

// ��һҳ����
?>" class="a1">��һҳ</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"] ?>?page=<?php
// �����ǰҳС����ҳ��ʱ
if ($page < $pagecount) {
	// ִ��ҳ��+1
	echo $page + 1;
} else {
	// ����Ϊ��ҳ��
	echo $pagecount;
}
// ��һҳ��ʵ���Լ�βҳ
?>" class="a1">��һҳ</a>&nbsp;<a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $pagecount; ?>" class="a1">βҳ</a></div></td>
        </tr>
      </table></td>
    <td width="5" bgcolor="#95DAFF"></td>
  </tr>
</table>
			  

			  
			  
			  
<?php
//�����ײ��ļ�
include_once "bottom.php";
?>

</body>
</html>