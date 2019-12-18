<?php 
include 'head.php';
 if($_SESSION['god3']==1){
	 include 'connection.php';
$mypassword=$_SESSION['god2'];
$emailid=$_SESSION['god1'];
$id1=$_SESSION['god4'];
$query = "SELECT id,name,whatitis,benefits,amount,timing FROM temple".$id1." ";

$result = mysqli_query($conn,$query);
if(!$result){
	die(mysqli_error($conn));
}

echo '';
while($arry = mysqli_fetch_array($result)){
	echo'
<div class="container">

<form  class="form-horizontal" action="savesetpooja.php" method="post" enctype="multipart/form-data">

           		<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput">Name of the pooja</label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 30 characters allowed" value="'.$arry["name"].'" name="name"></div>
</div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">What it is</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea" placeholder="Maximum 100 characters allowed" value="'.$arry["whatitis"].'" name="whatitis">'.$arry["whatitis"].'</textarea>
        
      </div>
    </div>
		<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput">Benefit </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 100 characters allowed" name="benefit" value="'.$arry["benefits"].'"></div>
</div>
	<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput">Price </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 10 characters allowed" value="'.$arry["amount"].'" name="price"></div>
</div>
	<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput">Timing </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 100 characters allowed" value="'.$arry["timing"].'" name="timing"></div>
</div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
		  <input type="hidden" name="id" value="'.$arry["id"].'">
        <button type="submit" class="btn btn-primary">Change</button>
      </div>
    </div>
</form>';}
echo '
</div>
</div>';
 }
 include 'foot.php'; ?>