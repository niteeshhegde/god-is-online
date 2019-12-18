<?php
include 'head.php';
include 'connection.php';
echo'
<div id="section1" class="container-fluid">
</div>
<div id="section21" class="container-fluid">';

$email= $_POST['emailid'];
$query = "SELECT email, id FROM temples WHERE email = ?";
$stmt=$conn->prepare($query);
		$stmt->bind_param('s',$email);
        $stmt->execute();
	 $stmt->bind_result($emails,$ids);
while ($stmt->fetch())
		{
			$id = $ids;
			$db_email = $emails;
		}
		if($email == $db_email)
		{
			$code = rand(10000,1000000);
			$to = $db_email;
			$subject = "Password Reset";
			$body = "This is an automated email. Please DO NOT reply to this email.
			
			Click the link below or paste it into your browser
			
			http://godisonline.in/fp13.php?code=$code&id=$id
			
			";
			
			$query2="UPDATE temples SET passreset= ".$code." WHERE id= ".$id."";
			mysqli_query($conn, $query2);
			$headers = "From: support@godisonline.com";
$headers .= "\r\nReply-To: support@godisonline.com";
$headers .= "\r\nX-Mailer: PHP/".phpversion();
 $sent=mail($to, $subject, $body, $headers,"-f support@godisonline.com");

			echo "<h1>Check your mailbox. A confirmation mail is sent.</h1> <h3> *Please check in promotions, social, updates, spam and in all categories if the mail didnot land in primary mailbox.</h3>";
		}
		else
		{
			echo "Email is incorrect";	
		}

?>
</div>
<?php
include 'foot.php';
?>