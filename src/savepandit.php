<?php include 'head.php';
require 'connection.php';
require 'lib/password.php';

echo'
<div class="container" background="black" >
<h1 id="black">
<div id="section21" class="container-fluid">';
function changeimage($email,$filetemp,$file_extn){
$email = $_POST['email'];
$password1x = $_POST['password1'];

	$file_path = 'images/pandits/' . substr(md5(time()), 0, 10) . '.' . $file_extn;
	 move_uploaded_file($filetemp, $file_path);

$username = "niteesh";
$password = "abcd12345NIT";
$hostname = "localhost";


$conn = mysqli_connect($hostname, $username, $password,"godis");
// Check connection
if (!$conn) {
	 echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
	         $strg = mysqli_real_escape_string($conn, $file_path);
			 $sql1="SELECT id from pandits where email=?";
			 $g=$conn->prepare($sql1);
$g->bind_param('s',$a);
$a=$email;
$g->execute();
$g->store_result();
$g->bind_result($id);
    /* fetch values */
    while ($g->fetch()) {
	$id1=$id;
	}{

            $updt = "UPDATE pandits SET image = '" . $strg . "' WHERE id = " . (int)$id1;
mysqli_query($conn, $updt);

$_SESSION['god1']=$email;
$_SESSION['god2']=$password1x;
$_SESSION['god3']='2';
$_SESSION['god4']=$id1;
echo $_SESSION['god4'];
echo $_SESSION['god3'];
echo $_SESSION['god2'];
echo $_SESSION['god1'];
}

	
}


$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$password22= password_hash($password2,PASSWORD_DEFAULT);
$name = $_POST['name'];
$phone=$_POST['phone'];
$location = $_POST['location'];
$naming = $_POST['naming'];
$marriage=$_POST['marriage'];
$upanayana = $_POST['upanayana'];
$gruhapravesh = $_POST['gruhapravesh'];
$satyanarayana = $_POST['satyanarayana'];
if(!$_POST['submit']){
echo "Please fill out the form";
} 
if(!(password_verify($password1,$password22)))
{
echo "Passwords didnot match";
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
		  	$sql="INSERT INTO pandits (email, password, name, phone, location, MarriageCeremony, NamingCeremony, Upanayana, Gruhapravesh, SatyanarayanaKatha)
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ssssssssss',$a,$b,$c,$d,$e,$f,$g,$h,$i,$j);
		$a=$email;
		$b=$password22;
		$c=$name;
		$d=$phone;
		$e=$location;
		$f=$marriage;
		$g=$naming;
		$h=$upanayana;
		$i=$gruhapravesh;
		$j=$satyanarayana;
		$result=$stmt->execute();
		echo $result;
		if($result){
			
		changeimage($email,$filetemp,$file_extn);
		header('Location: home1.php');
	
	ob_end_flush();	}
		else{ echo " This Email-id is already registered ";}
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
?>
</div>
</h1>
</div>
<?php include 'foot.php'; ?>