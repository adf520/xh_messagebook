<?php
session_start();					//����session�Ự
include_once("conn.php");			//�������ݿ������ļ�
//�������ݿ���û�����ѡ��id��ѯ�û��ǳ�
$sql=mysqli_query($conn,"select id from tb_user where usernc='".$_SESSION["unc"]."'");	
$info=mysqli_fetch_array($sql);			//��ȡ���ݿ����ѯ���� 
$userid=$info['id'];					//��ȡ�û�ID	
$createtime=date("Y-m-d H:i:s");		//��ȡϵͳ��ǰ����ʱ��
//�ж������ݿ�������԰��������(�û�id���û�id��������ʱ�䡾����ʱ�䡿�����⡾���⡿�����ݡ����ݡ�)�Ƿ����
if(mysqli_query($conn,"insert into tb_leaveword(userid,createtime,title,content)values('$userid','$createtime','".$_POST['title']."','".$_POST['content']."')")){
	//������ڽ�ִ�е��������Է���ɹ����һص��ϸ���ʷ��¼ҳ��
	echo "<script>alert('���Է���ɹ���');history.back();</script>";
}else{
	//����ִ�е��������Է���ʧ�ܣ������һص��ϸ���ʷ��¼ҳ��
  	echo "<script>alert('���Է���ʧ�ܣ�');history.back();</script>";
}
?>