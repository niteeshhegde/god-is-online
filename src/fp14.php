<?php
include 'head.php';
include 'lib/password.php';
?>

<div id="section22" class="container-fluid">
<?php

require("connection.php");

$newpass = $_POST['newpass'];
$newpass1 = $_POST['newpass1'];
$id = $_POST['id'];
$code = $_GET['code'];
if($newpass == $newpass1)
{
	$password = password_hash($newpass1,PASSWORD_DEFAULT);
	
	$query1= "UPDATE temples SET password= ? WHERE id= ?";
		$stmt=$conn->prepare($query1);
		$stmt->bind_param('si',$a,$b);
		$a=$password;
		$b=$id;
$status = $stmt->execute();
/* BK: always check whether the execute() succeeded */
if ($status === false) {
  trigger_error($stmt->error, E_USER_ERROR);}
	$query2="UPDATE temples SET passreset='0' WHERE id= ?";
	$stmt=$conn->prepare($query2);
		$stmt->bind_param('i',$a);
		$a=$id;
        $status = $stmt->execute();
/* BK: always check whether the execute() succeeded */
if ($status === false) {
  trigger_error($stmt->error, E_USER_ERROR);
  }else
  {
	echo "<h1>Your password has been updated</h1><a href='sign1.php'><h1>Click here to login</h1></a>";
}

}
else
{
	echo "Passwords must match ";
}	

?>
</div>
<?php
include 'foot.php';
?>