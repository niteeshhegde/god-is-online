<?php
include 'head.php';
require 'connection.php';
require 'lib/password.php';
$ss=$_POST['ss'];
if($ss==1){
$myemailid = $_POST['email'];
$mypassword = $_POST['password'];
$password22= password_hash($mypassword,PASSWORD_DEFAULT);
$query = "SELECT id,password FROM temples WHERE email =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$myemailid;
$g->execute();
$g->store_result();
{
     /* bind result variables */
    $g->bind_result($id,$password);

    /* fetch values */
    while ($g->fetch()) {
        $id1 =  $id;
		$password1=$password;
    }
	if(password_verify($mypassword,$password1)){

	echo "Successfully Logged</h3>";
$_SESSION['god1']=$myemailid;
$_SESSION['god2']=$mypassword;
$_SESSION['god3']='1';
$_SESSION['god4']=$id1;
	header('Location: home1.php');}
	else{
	echo '<h1>Incorrect Username or Password </h1> ';

}
}
}
else{
$myemailid = $_POST['email'];
$mypassword = $_POST['password'];
$password22= password_hash($mypassword,PASSWORD_DEFAULT);
$query = "SELECT id,password FROM pandits WHERE email =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$myemailid;
$g->execute();
$g->store_result();
{
     /* bind result variables */
    $g->bind_result($id,$password);

    /* fetch values */
    while ($g->fetch()) {
        $id1 =  $id;
		$password1=$password;
    }
	if(password_verify($mypassword,$password1)){

	echo "Successfully Logged</h3>";
$_SESSION['god1']=$myemailid;
$_SESSION['god2']=$mypassword;
$_SESSION['god3']='2';
$_SESSION['god4']=$id1;
	header('Location: home1.php');}
	else{
	echo '<h1>Incorrect Username or Password </h1> ';

}
}
}

include 'foot.php';
?>