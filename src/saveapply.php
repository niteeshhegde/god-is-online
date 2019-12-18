<?php
include'head.php';
include 'connection.php';
echo "<div id='emaiil'>";
$id = $_POST['id'];
$pid = $_POST['pid'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gotra = $_POST['gotra'];
$rashi=$_POST['rashi'];
$nakshatra=$_POST['nakshatra'];
$rashi=$_POST['rashi'];
$date=$_POST['date'];
$sql= 'SELECT name,amount FROM temple'.$id.' WHERE id=?';
$g=$conn->prepare($sql);
$g->bind_param('s',$pid);
$g->execute();
$g->store_result();
$code = rand(10000,1000000);
{
     /* bind result variables */
        $g->bind_result($namep,$amount);

    /* fetch values */
    while ($g->fetch()) {    
		$name1=$namep;
		$amount1=$amount;
	}
}
$date = DateTime::createFromFormat('d/m/Y', $date )->format('Y-m-d');

if(!$_POST['submit']){
echo "Please fill out the form";
header('Location: apply.php');
} else {
	$sql2= "INSERT INTO poojas".$id."(pname, amount, email, phone, name, gotra, rashi, nakshatra, date, code) 
	VALUES ( ?,?,?,?,?,?,?,?,?,? )" ;
	$stmt=$conn->prepare($sql2);
		$stmt->bind_param('ssssssssss',$a,$b,$c,$d,$e,$f,$g,$h,$i,$j);
		$a=$name1;
		$b=$amount1;
		$c=$email;
		$d=$phone;
		$e=$name;
		$f=$gotra;
		$g=$rashi;
		$h=$nakshatra;
		$i=$date;
		$j=$code;
		$result2=$stmt->execute();
		if($result2){
			
			echo'<div id="emaiil"><h1>You have successfully applied.<br /> Go to the temple with id proof.<br /> Your Confirmation code is '.$code.'</h1>';
			$db_email=$email;
			$to = $db_email;
			$subject = "Confirmation";
			$body = "
			
			This is an automated email. Please DO NOT reply to this email.
			
			Your transaction code is $code";
			
$headers = "From: support@godisonline.com";
$headers .= "\r\nReply-To: support@godisonline.com";
$headers .= "\r\nX-Mailer: PHP/".phpversion();
 $sent=mail($to, $subject, $body, $headers,"-f support@godisonline.com");
			echo "<h2><br />Check your mailbox. A confirmation mail is sent.</h2> <h3> <br />*Please check in promotions, social, updates, spam and in all categories if the mail didnot land in primary mailbox.</h3></div>";
		}
		else{
			echo $stmt->error;
		}
}
	
	echo '</div>';

include 'foot.php'?>

