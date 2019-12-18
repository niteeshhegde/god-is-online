<?php
include 'head.php';
 if($_SESSION['god3']==1){
	 include 'connection.php';
$mypassword=$_SESSION['god2'];
$emailid=$_SESSION['god1'];
$name = $_POST['name'];
$location = $_POST['location'];
$locality = $_POST['locality'];
$lord=$_POST['lord'];
$description = $_POST['description'];
$history = $_POST['history'];
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
	$query1= "UPDATE temples SET name = ?, location = ?, locality = ?, lord = ?, description = ?, history = ?, timing =?  WHERE id= ?";
		$stmt=$conn->prepare($query1);
		$stmt->bind_param('sssssssi',$c,$d,$e,$f,$g,$h,$i,$id1);
		$c=$name;
		$d=$location;
		$e=$locality;
		$f=$lord;
		$g=$description;
		$h=$history;
		$i=$timing;
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
	
	
	