<?php
//����session�Ự
session_start();
//�����������ݿ�
include_once("conn.php");
//�������ӹ���ģ��
include_once("function.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���Ա�</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="779" height="143" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/banner.gif"><table width="779" height="143" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="110" rowspan="2">&nbsp;</td>
		  <!--ʵ�������Ч����ӭ�û���¼-->
        <td height="55">&nbsp;<marquee scrollamount="2" scrolldelay="80">
		<!--�ж��û��Ƿ���ڣ����û�������Ϊ��-->
			<?php
		 if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		 //��������������ִ�С���ӭ����¼XXX��
		    echo "��ӭ����¼��".$_SESSION["unc"];
		
		 }
		?></marquee>
		</td>
      </tr>
      <tr>
        <td height="55">&nbsp;</td>
      </tr>
      <tr>
        <td width="235">&nbsp;</td>
		  <!--����������-->
        <td width="544"><div align="center">&nbsp;<a href="index.php" class="a3">��&nbsp;&nbsp;ҳ</a>&nbsp;&nbsp;<a href="reg.php" class="a3">�û�ע��</a>&nbsp;&nbsp;
			
			<!--�����û��Ƿ���ڲ����û�������Ϊ�գ����������ִ�з������ԣ�����ִ�е��������ȵ�¼��վ��Ȼ�����ԣ���<br>
-->
			<a href="
	
			<?php
		  if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		    echo "leaveword.php";
		  
		  }else{
		    echo "javascript:alert('���ȵ�¼��վ��Ȼ�����ԣ�');";
		  
		  }
        ?>
		" 
		class="a3">��������</a>&nbsp;&nbsp;<a href="index.php" class="a3">�鿴����</a>&nbsp;&nbsp;<a href="searchword.php" class="a3">��ѯ����</a>&nbsp;&nbsp;<a href="javascript:location.reload()" target="_self" class="a3">ˢ��ҳ��</a>&nbsp;&nbsp;
			
			<!--SESSION����Ȩ�ޣ�ֻ��ע���¼�û��ſ����������ʸý���-->
		<a <?php 
		 if(isset($_SESSION["unc"]) && $_SESSION["unc"]!=""){
		?>
		
		href="https://www.quanbk.cn" class="a3">ȯ�Ϳ�</a>&nbsp;&nbsp;<a href="https://www.quanbk.cn/yy" class="a3">����</a>&nbsp;&nbsp;<a href="https://www.quanbk.cn/pan" class="a3">��������</a>
		 &nbsp;<a href="logout.php" class="a3">�˳���¼</a>&nbsp;
		
		<?php
		 }
		?></div></td>
      </tr>
    </table></td>
  </tr>
</table>
