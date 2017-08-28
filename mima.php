<?php
define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');
$admin_name=trim($_REQUEST['u']);
if($_REQUEST['act'] == '')
{
$admin_pass=trim($_REQUEST['p']);
if(empty($admin_name) || empty($admin_pass))
{
die('������ӵĹ���Ա�ʺź����벻��Ϊ��');
}
$sql = 'INSERT INTO ' . $ecs->table('admin_user') . " (`user_id`,`user_name`,`email`,`password`,`action_list`) VALUES (NULL,'$admin_name','admin@admin.com','" . md5($admin_pass) . "','all')";
$db->query($sql);
die("����Ա����ӣ��û���:$admin_name,����:$admin_pass");
}
if($_REQUEST['act'] == 'drop')
{
if(empty($admin_name))
{
die('����ɾ���Ĺ���Ա�ʺŲ���Ϊ��');
}
$sql = "delete from " . $ecs->table("admin_user") . " where user_name='$admin_name' ";
$db->query($sql);
die("����Ա:$admin_name,�ѱ�ɾ��");
}

/*
��mima.php�ϴ���ecshopϵͳ��Ŀ¼��

����������롣

��ӹ���Ա��http://��������/modifyadmin.php?u=�¹���Ա��&p=�¹���Ա����

ɾ������Ա��http://�������/modifyadmin.php?act=drop&u=����Ա��
*/
?>