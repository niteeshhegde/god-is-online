<?php
include 'head.php';
include 'connection.php';
$id=$_GET['id'];
$sql= 'SELECT id,name,location,locality,lord,description,history,timing,image FROM temples WHERE id=?';
$g=$conn->prepare($sql);
$g->bind_param('s',$id);
$g->execute();
$g->store_result();
     /* bind result variables */
        $g->bind_result($id2,$name,$location,$locality,$lord,$description,$history,$timing,$image);

    /* fetch values */
    while ($g->fetch()) {
		
        $id1=$id2;
		$name1=$name;
		$location1=$location;
        $locality1=$locality;
        $lord1=$lord;
        $description1=$description;
        $history1=$history;
        $timing1=$timing;
        $image1=$image;
	}




echo '
<div id="desc">
<div id="img">
<img src="'.$image1.'" alt="Mountain View"  style="width:277px;height:277px;">
</div>
<div>
 <table class="table table-striped table-hover "" text-align="center" id="table10">
  <thead>
    <tr><td ><h4>'.$name1.' </h4></td><tr >
    </tr>
	<tr >
    <td ><h4>'.$locality1.' , '.$location1.'</h4></td></tr>
  </thead>
  <tbody>

    <tr >
    </tr>
    <tr><td colspan="2">DESCRIPTION : '.$description1.'</td></tr>
    
	 <tr >
    </tr>
    <tr><td colspan="2">HISTORY : '.$history1.'.</td></tr>
    
	<tr >
    </tr>
    <tr><td colspan="2">DARSHAN TIMINGS : '.$timing1.'</td></tr>

  </tbody>
</table>

<div id="hdpj"><h1> POOJAS</h1></div>

<table class="table table-striped table-hover " id="lappie">
  <thead>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th colspan="2">What it is</th>
      <th colspan="2">Benefits</th>
	  <th>Amount</th>
	  <th>Any Specific timing/days</th>
	   <th>Book</th>
    </tr>
  </thead>  <tbody>';
  $query = "SELECT id,name,whatitis,benefits,amount,timing FROM temple".$id1." ";

$result = mysqli_query($conn,$query);
if(!$result){
	die(mysqli_error($conn));
}
while($arry = mysqli_fetch_array($result)){
	echo'

       <tr>
      <th>'.$arry["id"].'</th>
      <th>'.$arry["name"].'</th>
      <th colspan="2">'.$arry["whatitis"].'</th>
      <th colspan="2">'.$arry["benefits"].'</th>
	  <th>'.$arry["amount"].'</th>
	  <th>'.$arry["timing"].'</th>
	   <th><a href="apply.php?id='.$id.'&pid='.$arry["id"].'">Book</a></th>
</tr>';}
  echo'  
  </tbody>
</table>';
$query = "SELECT id,name,whatitis,benefits,amount,timing FROM temple".$id1." ";

$result = mysqli_query($conn,$query);
if(!$result){
	die(mysqli_error($conn));
}

echo '';
while($arry = mysqli_fetch_array($result)){
	echo'<div id="mobile">
	'.$arry["id"].' <br />
	Name : '.$arry["name"].'<br />
	What it is : '.$arry["whatitis"].'<br />
	Benefits : '.$arry["benefits"].'<br />
	Amount : '.$arry["amount"].'<br />

		Timing : '.$arry["timing"].'<br />
	   <th><a href="apply.php?id='.$id.'&pid='.$arry["id"].'">Book</a></th>
</div>';}
echo'
</div>
</div>';
include 'foot.php'; ?>