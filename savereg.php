<!--ע����Ϣ���ݿ����-->
<?php
//����session�ỰȨ��
session_start();
//�����������ݿ�
 include_once("conn.php");
//�û��ǳƸ�ֵ������
 $usernc=$_POST["usernc"];
//���ݿ����Ӳ�ѯѡ�񣬴��û����ݱ��в����û��ǳ�
 $sql=mysqli_query($conn,"select usernc from tb_user where usernc='".$usernc."'");
//�����ݿ��ѯȡ���û��ǳ�����
 $info=mysqli_fetch_array($sql);
//�ж����ݿ��и��û��ǳ��Ƿ����
 if($info){
	 //������ڣ��򵯳��Ի��򡰶Բ�������ǳ��Ѿ���ռ�ã�����������ʷ��¼ԭ����ҳ��
   echo "<script>alert('�Բ�������ǳ��Ѿ���ռ�ã�');history.back();</script>";
	 //�˳�
   exit;
 }
//Զ�����ӷ�����ip��ַ
 $ip=$_SERVER["REMOTE_ADDR"];
//����������ݿ��ѯ�����û����ݿ��ע�����ݣ��û��ǳơ��û��ǳơ����û����롾md5�����û����롿����ʵ��������ʵ�����������䡾���䡿��qq��qq������ϵ�绰����ϵ�绰����ip��Զ�����ӷ�����ip��ַ������ϵ��ַ����ϵ��ַ����ͷ��ͷ�񡿡�ʵʱʱ�䡾date("Y-m-d H:i:s")����ʱ�䡿���Ա��Ա𡿡��û����͡�0������
 if(mysqli_query($conn,"insert into tb_user(usernc,userpwd,truename,email,qq,tel,ip,address,face,regtime,sex,usertype) values('".$usernc."','".md5(trim($_POST["userpwd"]))."','".$_POST["truename"]."','".$_POST["email"]."','".$_POST["qq"]."','".$_POST["tel"]."','".$ip."','".$_POST["address"]."','".$_POST["face"]."','".date("Y-m-d H:i:s")."','".$_POST["sex"]."','0')")){
//����û��ǳƣ�session�Ự���û��ǳ���Ȩ�ޣ���Ϊ��ʱ
   if($_SESSION["unc"]!=""){
	//��ִ��session�Ự�Զ�����   
    session_unset();
   }
	//�Ự���û��ǳƵ����û��ǳƵ�ֵʱ 
   $_SESSION["unc"]=$usernc;
	 //��ִ�е�����ע��ɹ�����������ʷ��¼ҳ��
   echo "<script>alert('ע��ɹ���');history.back();</script>";
 }else{
	 //����ִ�е�����ע��ʧ�ܣ���������ʷ��¼ҳ��
   echo "<script>alert('ע��ʧ�ܣ�');history.back();</script>";
 }
?>