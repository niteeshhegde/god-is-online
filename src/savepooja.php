<?php include 'head.php';
require 'connection.php';
$id=$_SESSION['god4'];
$name = $_POST['name'];
$whatitis = $_POST['whatitis'];
$benefit = $_POST['benefit'];
$price = $_POST['price'];
$timing = $_POST['timing'];
$sql="INSERT INTO temple".$id." (name,whatitis,benefits,amount,timing)
		VALUES (?, ?, ?, ?, ?)";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('sssss',$a,$b,$c,$d,$e);
		$a=$name;
		$b=$whatitis;
		$c=$benefit;
		$d=$price;
		$e=$timing;
		$result=$stmt->execute();
		if($result){
			$query = "SELECT poojas FROM temples WHERE id =?";
			$g=$conn->prepare($query);
			$g->bind_param('i',$z);
			$z=$id;
			$g->execute();
			$g->store_result();
	
     /* bind result variables */
    $g->bind_result($poojas1);
    /* fetch values */
    while ($g->fetch()) {
        $poojas2=$poojas1;
		$poojas3=$poojas2 ." ". $name;
		$query1= "UPDATE temples SET poojas = ? WHERE id= ?";
		$stmt=$conn->prepare($query1);
		$stmt->bind_param('si',$x,$y);
		$x=$poojas3;
		$y=$id;
$status = $stmt->execute();
/* BK: always check whether the execute() succeeded */
if ($status === false) {
  echo "Enter details in short";}
	else {
		echo"<h1>The information is reset.</h1>";
				header('Location: home1.php');
	}

		}


		}
		else{
			  echo "Enter details in short";
		}?>