
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

mysql_connect('localhost','root','root')or die(mysql_error());
mysql_select_db('test');
mysql_query('set names utf8');


if (isset($_POST['button']))
{
	$stuname=$_POST['stuname'];
	$stuadress=$_POST['stuadress'];
	$stuscare=$_POST['stuscare'];
	$sqlinto="INSERT INTO student (id,stuname,stuadress,stuscare)VALUES(NULL,'$stuname','$stuadress',$stuscare)";
	
	if(mysql_query($sqlinto))
	{
		echo '插入成功';
		
	}else{
	
		echo '插入失败';	
	}
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="546" border="2" align="center">
    <tr>
      <td height="70" colspan="2" align="center">添加学生信息</td>
    </tr>
    <tr>
      <td width="96" height="70">姓名</td>
      <td width="432"><label for="stuname"></label>
      <input type="text" name="stuname" id="stuname" /></td>
    </tr>
    <tr>
      <td height="70">地址</td>
      <td><label for="stuadress"></label>
      <input type="text" name="stuadress" id="stuadress" /></td>
    </tr>
    <tr>
      <td height="70">成绩</td>
      <td><label for="stuscare"></label>
      <input type="text" name="stuscare" id="stuscare" /></td>
    </tr>
    <tr>
      <td height="70" colspan="2" align="center"><input type="submit" name="button" id="button" value="提交" />
      <input type="button" name="button2" id="button2" value="返回" /></td>
    </tr>
  </table>
</form>



</body>
</html>
