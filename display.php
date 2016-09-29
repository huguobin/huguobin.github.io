<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<link rel="stylesheet" type="text/css" href="style/display.css"/>
<?php
mysql_connect('localhost','root','root');
mysql_select_db('test');
mysql_query('set names utf8');
$rs=mysql_query('select * from student order by stuscare desc');
?>
<table width="500">
<tr>
<th>学号</th><th>姓名</th><th>地址</th><th>成绩</th>

<?php
while($rows=mysql_fetch_assoc($rs))
{
	echo'<tr>';
	echo'<td>'.$rows['id'].'</td>';
	echo'<td>'.$rows['stuname'].'</td>';
	echo'<td>'.$rows['stuadress'].'</td>';
	echo'<td>'.$rows['stuscare'].'</td>';
	echo'<tr>';
}
?>
</tr>

</table>


</body>
</html>