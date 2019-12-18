<?php
include 'head.php';
include 'lib/password.php';
 if($_SESSION['god3']==2){
	 include 'connection.php';
$mypassword=$_SESSION['god2'];
$emailid=$_SESSION['god1'];
$newpass = $_POST['password1'];
$newpass1 = $_POST['password2'];
if($newpass == $newpass1)
{
$query = "SELECT id,password FROM pandits WHERE email =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$emailid;
$g->execute();
$g->store_result();
{
	$password10 = password_hash($newpass1,PASSWORD_DEFAULT);
     /* bind result variables */
    $g->bind_result($id,$password);
    /* fetch values */
    while ($g->fetch()) {
        $id2=$id;
	$password2=$password;
    }
	if(password_verify($mypassword,$password2)){
		$id1=$id2;
		$password1=$password2;
	$query1= "UPDATE pandits SET password= ? WHERE id= ?";
		$stmt=$conn->prepare($query1);
		$stmt->bind_param('si',$a,$b);
		$a=$password10;
		$b=$id;
$status = $stmt->execute();
/* BK: always check whether the execute() succeeded */
if ($status === false) {
  trigger_error($stmt->error, E_USER_ERROR);}
else{
	echo "<h1>Your password has been updated</a>";
		$_SESSION['god2']=$newpass;
}
}
else
{
}	
}
}
else{
	echo "<h1>Passwords must match </h1>";
}
 }
include 'foot.php';
?>