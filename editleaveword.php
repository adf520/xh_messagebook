<!--ʵ�ֱ༭���԰幦���Լ��������-->
<?php
//�����������ݿ��ļ�
include_once("conn.php");
//�ж�id�Ƿ���ڣ�������ڽ��õ�id���Ƹ�����id�����򽫿ո��Ƹ�����id
$id=isset($_GET["id"])?$_GET["id"]:"";
//�ж��û��ύ����Ϣ�Ƿ�������ύ����Ϣ����Ϊ��
if(isset($_POST["submit"]) && $_POST["submit"]!=""){
	//���������������������ִ���������ݿ����������Ϣ�����⡢���ݡ�id��
  if(mysqli_query($conn,"update tb_leaveword set title='".$_POST["title"]."',content='".$_POST["content"]."' where id='".$_POST["id"]."'")){
	  //������������������㣬ִ�е�����"���Ը��ĳɹ���"
    echo "<script>alert('���Ը��ĳɹ���');window.opener.location.reload();window.close();</script>";
  }else{
	  //����ִ�е��������Ը���ʧ�ܣ���
    echo "<script>alert('���Ը���ʧ�ܣ�');history.back();</script>";    
  }
 exit;//�˳�
}
//�������ݿ�ѡ�����Ա����ݿ�������Ϣ��ѯ
$sql=mysqli_query($conn,"select * from tb_leaveword where id='".$id."'");
$info=mysqli_fetch_array($sql);
?>

<!--�༭���Բ������-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�༭����</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<!--��������������߾�Ϊ0-->
<body topmargin="0" leftmargin="0" bottommargin="0">
	<!--��񲼾����ÿ�450����200 �߿�0 ˮƽ���� ��Ԫ������0 ��Ԫ����1 �߿���ɫΪ��ɫ  ������ɫΪǳ��ɫ-->
<table width="450" height="200" border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#3399FF">
 <!--ͨ��JavaScript���жϣ��༭�ύ��Ӧ����-->
 <script language="javascript">
  function chkinput(form){
	  //������б����ֵΪ��
    if(form.title.value==""){
	//��ִ�е������������ⲻ��Ϊ��
	  alert("�������ⲻ��Ϊ�գ�");
	//��������۽�
	  form.title.focus();
	//����Ϊfalse
	  return(false);
	
	}
	  //����������ݵ�ֵΪ��
	 if(form.content.value==""){
	//��ִ�е������������ݲ���Ϊ��
	  alert("�������ݲ���Ϊ�գ�");
		 //��������۽�
	  form.content.focus();
		 //����Ϊfalse
	  return(false);
	
	}
	  //����Ϊtrue
   return(true);
  
  }
 
 </script>
 <!--�༭���Ա��������-->
 <form name="form1" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" onSubmit="return chkinput(this)">
 
  <tr>
    <td height="25" colspan="2" background="images/dh_back_1.gif" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;<img src="images/biao.gif">&nbsp;�༭����</td>
  </tr>
  <tr>
    <td width="76" height="25" bgcolor="#FFFFFF"><div align="center">�������⣺</div></td>
    <td width="371" bgcolor="#FFFFFF">&nbsp;<input name="title" type="text" class="inputcss" size="45" value="<?php echo $info['title'];?>"></td>
  </tr>
  <tr>
    <td height="200" bgcolor="#FFFFFF"><div align="center">�������ݣ�</div></td>
    <td height="200" bgcolor="#FFFFFF">&nbsp;<textarea name="content" cols="52" rows="12" class="inputcss"><?php echo $info['content'];?></textarea></td>
  </tr>
  <tr>
    <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
		<!--����������id-->
		<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
		<!--�༭�ύ�ؼ�-->
		<input type="submit" value="�༭" class="buttoncss" name="submit">&nbsp;&nbsp;
		<!--ȡ�����ÿؼ�-->
		<input type="reset" value="ȡ��" class="buttoncss"></div></td>
  </tr>
  </form>
  
</table>
</body>
</html>
