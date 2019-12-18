<?php 
include 'head.php';
 if($_SESSION['god3']==1){
	 include 'connection.php';
	 require "lib/password.php";
$mypassword=$_SESSION['god2'];
$emailid=$_SESSION['god1'];
$idi=$_SESSION['god4'];
$query = "SELECT id,password FROM temples WHERE email =?";
$g=$conn->prepare($query);
$g->bind_param('s',$a);
$a=$emailid;
$g->execute();
$g->store_result();
{
	
     /* bind result variables */
    $g->bind_result($sid,$password);
    /* fetch values */
    while ($g->fetch()) {
        $id=$sid;
		$password1=$password;
    }
	if(password_verify($mypassword,$password1)){
	
	$id1=$id;

	}
	else{
	}
	}

 }
 else{
		header('Location: home.php');			
}
if($id1==$idi)
{
	$query = "SELECT id, pname, amount, email, phone, name, gotra, rashi, nakshatra, date, code FROM poojas".$id1." WHERE (date >= CURDATE())  ORDER BY YEAR(date) ASC, MONTH(date) ASC, DAY(date) ASC ";

$result = mysqli_query($conn,$query);
if(!$result){
	die(mysqli_error($conn));
}
	echo 
"<table class='table' text-align='center'>
  <thead>
    <tr><th> DATE </th><th> ID </th><th> NAME </th><th> GOTRA </th><th> RASHI</th> <th> NAKSHATRA </th><th> POOJA NAME </th><th> AMOUNT </th><th> PHONE NO </th><th> E- MAIL ID </th><th> CODE </th></tr>
  </thead>
  <tbody>
    <tr>
    </tr>";

while($arry = mysqli_fetch_array($result)){
	$a=date_create($arry['date']);
	echo 
"
    <tr><td>" . date_format($a,'d/m/Y')."</td><td>". $arry['id']."</td><td>". $arry['name']."</td><td>". $arry['gotra']."</td><td>". $arry['rashi']."</td><td>". $arry['nakshatra']."</td><td>". $arry['pname']."</td><td>". $arry['amount']."</td><td>". $arry['phone']."</td><td>". $arry['email']."</td><td>". $arry['code']."</td></tr>
    <tr>
    </tr>";
}
  echo "</tbody>
</table> ";
}
else{
echo "ggg";
}
include 'foot.php';
?>