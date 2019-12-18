<?php 
include 'head.php';
$id = $_GET['id'];
$pid = $_GET['pid'];
?>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
        </script>
		<?php echo'
<div class="container">
  <h2>Book A Pooja</h2>

    <div id="300"> <br /> <br /> </div>
	  <form class="form-horizontal" action="saveapply.php" method="post" enctype="multipart/form-data">
  <fieldset>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email id</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email">
      </div>
    </div>

			<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput">Phone no </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" name="phone" type="text" placeholder="Phone number"></div>
</div>
			<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput"> Name </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" name="name" type="text" placeholder="Maximum 35 characters allowed" ></div>
</div>
		<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput"> Gotra </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 25 characters allowed" name="gotra" value=""></div>
</div>
	  		<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput"> Rashi </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 25 characters allowed" name="rashi" value=""></div>
</div> 
	  		<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput"> Nakshatra </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 25 characters allowed" name="nakshatra" value=""></div>
</div>
	 <div class="form-group" >
      <label for="inputEmail" class="col-lg-2 control-label">Date of Pooja</label>
      <div class="col-lg-10" data-date-format="dd/mm/yyyy">
        <input type="text" class="datepicker" name="date" id="datepicker" data-date-format="dd/mm/yyyy" placeholder="31/01/2016" >
		        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $("#datepicker").datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
        </script>
      </div>
	  
    </div>

        <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
		<input type="hidden" name="id" value="'.$id.'">
				<input type="hidden" name="pid" value="'.$pid.'">
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</div>'; 
include 'foot.php'; ?>