<?php 
include 'head.php';
?>

<div class="container">
<form  class="form-horizontal" action="savepooja.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
<label for="sel1" class="col-lg-2 control-label" >  NAME OF THE POOJA : </label>
           <div class="col-lg-10"> <select class="form-control" id="sel1" name="name" >
	  	      <option value="kumkumarchane">Kumkumarchane </option>
  <option value="mangalaarati">Mangalaarati</option>
  <option value="devi parayana">Devi Parayana</option>
   <option value="rudrabhishekha">Rudrabhishekha</option>
   <option value="ayudh">Ayudh(vehicle) Pooja</option>
</select>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">What it is</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea" placeholder="Maximum 100 characters allowed" name="whatitis"></textarea>
        
      </div>
    </div>
		<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput">Benefit </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 100 characters allowed" name="benefit"></div>
</div>
	<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput">Price </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 10 characters allowed" name="price"></div>
</div>
	<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput">Timing </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 100 characters allowed" name="timing"></div>
</div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit1" class="btn btn-primary">Submit</button>
      </div>
    </div>
</form>
<h1> Add a new type of pooja</h1>
<form  class="form-horizontal" action="savepooja.php" method="post" enctype="multipart/form-data">

           		<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput">Name of the pooja</label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 30 characters allowed" name="name"></div>
</div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">What it is</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea" placeholder="Maximum 100 characters allowed" name="whatitis"></textarea>
        
      </div>
    </div>
		<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput">Benefit </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 100 characters allowed" name="benefit" value=""></div>
</div>
	<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput">Price </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 10 characters allowed" name="price"></div>
</div>
	<div class="form-group">
  <label class="col-lg-2 control-label" for="focusedInput">Timing </label>
    <div class="col-lg-10">
  <input class="form-control" id="focusedInput" type="text" placeholder="Maximum 100 characters allowed" name="timing"></div>
</div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</form>
</div>

<?php include 'foot.php'; ?>