<?php
include 'head.php';
include 'lib/password.php';
 if($_SESSION['god3']==1){
	 include 'connection.php';
$mypassword=$_SESSION['god2'];
$emailid=$_SESSION['god1'];
$id=$_SESSION['god4'];
$pid = $_POST['id'];
$name = $_POST['name'];
$whatitis = $_POST['whatitis'];
$benefit = $_POST['benefit'];
$price = $_POST['price'];
$timing = $_POST['timing'];
$query = "SELECT id,password FROM temples WHERE email =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$emailid;
$g->execute();
$g->store_result();
{
	
     /* bind result variables */
    $g->bind_result($id,$password);
    /* fetch values */
    while ($g->fetch()) {
        $id2=$id;
		
		$password2=$password;
    }
	if(password_verify($mypassword,$password)){
	
		$id1=$id2;
		
		$password1=$password2;
	$query1= "UPDATE temple".$id." SET name = ?,whatitis = ?,benefits = ?,amount = ?,timing= ? WHERE id= ?";
		$stmt=$conn->prepare($query1);
			$stmt->bind_param('sssssi',$a,$b,$c,$d,$e,$f);
		$a=$name;
		$b=$whatitis;
		$c=$benefit;
		$d=$price;
		$e=$timing;
		$f=$pid;
$status = $stmt->execute();
/* BK: always check whether the execute() succeeded */
if ($status === false) {
  trigger_error($stmt->error, E_USER_ERROR);}
	else {
		echo"<h1>The information is reset.</h1>";
	}
	
	
	}
	
	}
	
 }
 else{
		echo "2";
	}
include 'foot.php';
?>
	
	
	