<?php
//�����������ݿ��ļ�
include_once("conn.php");
//�������ݿ��ж�ͨ��idɾ�����԰������ݿ⣬���idΪ��
if(mysqli_query($conn,"delete from tb_leaveword where id='".$_GET["id"]."'")){
	//��ִ�е���������ɾ���ɹ���Ȼ��ص��ϸ���ʷ����
  	echo "<script>alert('����ɾ���ɹ���');history.back();</script>";
}else{
	//����ִ�е���������ɾ��ʧ�ܣ�Ȼ��ص��ϸ���ʷ����
  	echo "<script>alert('����ɾ��ʧ�ܣ�');history.back();</script>";
}
?>