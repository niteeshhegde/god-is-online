<?php include 'head.php';
require "lib/password.php";
require "connection.php";

echo'
<div class="container" background="black" >
<h1 id="black">
<div id="section21" class="container-fluid">';
function changeimage($email,$filetemp,$file_extn){
$email = $_POST['email'];
$password1x = $_POST['password1'];

	$file_path = 'images/temples/' . substr(md5(time()), 0, 10) . '.' . $file_extn;
	 move_uploaded_file($filetemp, $file_path);

$username = "niteesh";
$password = "abcd12345NIT";
$hostname = "localhost";
echo $file_path;

$conn = mysqli_connect($hostname, $username, $password,"godis");
// Check connection
if (!$conn) {
	 echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
	         $strg = mysqli_real_escape_string($conn, $file_path);
			 $sql1="SELECT id from temples where email=?";
			 $g=$conn->prepare($sql1);
$g->bind_param('s',$a);
$a=$email;
$g->execute();
$g->store_result();
$g->bind_result($id);
    /* fetch values */
    while ($g->fetch()) {
	$id1=$id;
	}
            $updt = "UPDATE temples SET image = '" . $strg . "' WHERE id = " . (int)$id1;
mysqli_query($conn, $updt);

$sql2="CREATE TABLE temple".$id." (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
whatitis VARCHAR(100),
benefits VARCHAR(100),
amount VARCHAR(10),
timing VARCHAR(100)
)ENGINE = INNODB";
mysqli_query($conn, $sql2);
$sql3="CREATE TABLE poojas".$id." (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
pname VARCHAR(50),
amount VARCHAR(10),
email VARCHAR(35) NOT NULL,
phone VARCHAR(15) ,
name VARCHAR(40),
gotra VARCHAR(40),
rashi VARCHAR(40),
nakshatra VARCHAR(40),
date DATE,
code VARCHAR(15)
)ENGINE = INNODB";
$retval = mysqli_query($conn, $sql3);
if(! $retval )
{
  die('Could not create table: ' . mysqli_error($conn));
}
$_SESSION['god1']=$email;
$_SESSION['god2']=$password1x;
$_SESSION['god3']='1';
$_SESSION['god4']=$id1;
}

$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$password22= password_hash($password2,PASSWORD_DEFAULT);
$name = $_POST['name'];
$location = $_POST['location'];
$locality = $_POST['locality'];
$lord=$_POST['lord'];
$description = $_POST['description'];
$history = $_POST['history'];
$timing = $_POST['time'];
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
   echo $file_extn;
      $filetemp= $_FILES['image1']['tmp_name'];
	  if(in_array($file_extn,$allowed))
	  {
		  $filesize= $_FILES['image1']['size'];
		  if(($filesize!=0) && ($filesize <= 1000000)){
		  	$sql="INSERT INTO temples (email, password, name, location, locality, lord, description, history, timing)
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('sssssssss',$a,$b,$c,$d,$e,$f,$g,$h,$i);
		$a=$email;
		$b=$password22;
		$c=$name;
		$d=$location;
		$e=$locality;
		$f=$lord;
		$g=$description;
		$h=$history;
		$i=$timing;
		$result=$stmt->execute();
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