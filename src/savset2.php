<?php
include 'head.php';
 if($_SESSION['god3']==2){
	 include 'connection.php';
$mypassword=$_SESSION['god2'];
$emailid=$_SESSION['god1'];
$name = $_POST['name'];
$phone=$_POST['phone'];
$location = $_POST['location'];
$naming = $_POST['naming'];
$marriage=$_POST['marriage'];
$upanayana = $_POST['upanayana'];
$gruhapravesh = $_POST['gruhapravesh'];
$satyanarayana = $_POST['satyanarayana'];
$query = "SELECT id,password FROM pandits WHERE email =?";
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
	$query1= "UPDATE pandits SET name = ?, phone = ?, location = ?, MarriageCeremony = ?, NamingCeremony = ?, Upanayana = ?, Gruhapravesh = ?, SatyanarayanaKatha = ? WHERE id= ?";
		$stmt=$conn->prepare($query1);
		$stmt->bind_param('ssssssssi',$c,$d,$e,$f,$g,$h,$i,$j,$id1);
		$c=$name;
		$d=$phone;
		$e=$location;
		$f=$marriage;
		$g=$naming;
		$h=$upanayana;
		$i=$gruhapravesh;
		$j=$satyanarayana;
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
		
	}
include 'foot.php';
?>
	
	
	