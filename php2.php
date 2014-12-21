<html>
<?php
$id= $_POST['id'];
$passwd=$_POST['password'];
mysql_connect('localhost', 'root', 'takming') or die ("Can not connect to mysql");
mysql_select_db('D10116156');
$sql="select * from user_profile where id=$id";
$R=mysql_query($sql) or die ("Can not get date");
$rows=mysql_fetch_array($R);
$loginSuccess=false;
if ($rows && $rows['password'])
{
  if (md5($password)==$rows['password'])
   {
      $loginSuccess = true;
   }
}
if ($loginSuccess)
{
}
else
{
}
?>
</html>
