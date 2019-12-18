<?php
include 'head.php';
 if($_SESSION['god3']==1){
	 include 'connection.php';
$mypassword=$_SESSION['god2'];
$emailid=$_SESSION['god1'];
echo'
<div class="container" background="black" >
<h1 id="black">
<div id="section21" class="container-fluid">';
function changeimage($email,$filetemp,$file_extn){

	$file_path = 'images/pandits/' . substr(md5(time()), 0, 10) . '.' . $file_extn;
	 move_uploaded_file($filetemp, $file_path);

$username = "niteesh";
$password = "abcd12345NIT";
$hostname = "localhost";


$conn = mysqli_connect($hostname, $username, $password,"godis");
// Check connection
	         $strg = mysqli_real_escape_string($conn, $file_path);
			 $sql1="SELECT id from temples where email=?";
			 $g=$conn->prepare($sql1);
$g->bind_param('s',$a);
$a=$email;
$g->execute();
$g->store_result();
{
	$g->bind_result($id);
    /* fetch values */
    while ($g->fetch()) {
	$id1=$id;
	}
            $updt = "UPDATE temples SET image = '" . $strg . "' WHERE id = " . (int)$id1;
mysqli_query($conn, $updt);

}


}

if(!$_POST['submit']){
echo "Please fill out the form";
} 

else {

	if(isset($_POST["submit"])){
if(isset($_FILES['image1'])){
if(empty($_FILES['image1']['name'])=== true){
	echo "choose a FILE !";
	
}else{
	$allowed= array('jpg','jpeg','png','gif');
   $filename= $_FILES['image1']['name'];
   $file_extn1=explode('.',$filename);
   $file_extn=strtolower(end($file_extn1));
      $filetemp= $_FILES['image1']['tmp_name'];
	  if(in_array($file_extn,$allowed))
	  {
		  $filesize= $_FILES['image1']['size'];
		  if(($filesize!=0) && ($filesize <= 1000000)){
		
			
		changeimage($emailid,$filetemp,$file_extn);
	echo "Successfully updated";
	ob_end_flush();	
		
	  }
	  else{
		  echo "Choose a different file";
	  }
	  }else{
		  echo"Choose a different file extention.( jpeg, jpg,png,gif  only are allowed) ";
	  }
}
}
else{
	echo"please choose a file ";
}
}

}
 }
?>
</div>
</h1>
</div>
<?php include 'foot.php'; ?>