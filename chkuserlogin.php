
<!--�û���¼�ж�-->
<?php
//����session�Ự
session_start();
//�����������ݿ��ļ�
include_once("conn.php");
//md5��������
md5($_POST["userpwd"]);
//���ݿ����Ӳ�ѯѡ�񣬴��û����ݱ��в����û����ͣ����������û��ǳƺ�����
$sql=mysqli_query($conn,"select usertype from tb_user where usernc='".$_POST["usernc"]."' and userpwd='".md5(trim($_POST["userpwd"]))."'");
$info=mysqli_fetch_array($sql);
//�û��������벻Ϊ��ʱ����ִ�е����¼�ɹ��������¼ʧ�ܣ�
if($info!=false){
	//��ִ���û��ǳƸ�ֵ���Ự�û��ǳ�����������
	$_SESSION["unc"]=$_POST["usernc"];
	//��������Ի��򡰵�¼�ɹ����ҷ�����ҳ
	echo "<script>alert('��¼�ɹ���');window.location.href='index.php';</script>";
}else{
	//���򵯳�����¼ʧ�ܡ��������ϸ���ʷ��¼ҳ��
  	echo "<script>alert('��¼ʧ�ܣ�');history.back();</script>";
}
?>