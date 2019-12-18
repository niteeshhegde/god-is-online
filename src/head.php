<?php session_start();
ob_start();
echo'
<!DOCTYPE-html>
<html>
<head>
<title>God is Online</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name = "description" content ="god, online">
<meta name = "keywords" content ="pooja,pandit,purohit,devotion,spiritual,tour">
<link rel="icon" href="god1.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="god.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 90%;
      margin: auto;
  }
  </style>
</head>
<body>
<div id="big">
<div id="head">
<h1  id="head">God is Online</h1>
</div>
<nav class="navbar navbar-default"  id="1">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home1.php"><div id="brand">God is Online</div></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" id="1">
      <ul class="nav navbar-nav">
        <li ><a href="home1.php" >Temples</a></li>
		  <li><a href="poojas.php">Poojas</a></li>
		    <li><a href="pandit.php">Book A Pandit</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Spiritual Tourism<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="tour1.php">South India</a></li>
            <li><a href="tour1.php">North India</a></li>
            <li><a href="tour1.php">West India</a></li>
			<li><a href="tour1.php">East India</a></li>
            
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" action="searchtemp.php"  method="get" role="form" >
        <div class="form-group">
          <input type="text" class="form-control" name = "search" placeholder="Search for Temples">
        </div>
        <input name="submitme" type="submit" value=" Search " class="btn btn-primary">
      </form>
      <ul class="nav navbar-nav navbar-right">';
	  if((isset($_SESSION['god1']))&&(isset($_SESSION['god2']))&&(isset($_SESSION['god3'])) ) {
	if($_SESSION['god3']==2){
	echo'
<li><a href="set2.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
	<li><a href="signout.php"><span class="glyphicon glyphicon-log-out"></span> SignOut</a></li>';}
	else{
		echo'
						<li><a href="addpooja.php"><span class="glyphicon glyphicon-plus-sign"></span> Add Pooja</a></li>
				<li><a href="viewapp.php"><span class="glyphicon glyphicon-tasks"></span> View Applicants</a></li>
		<li><a href="set1.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
	<li><a href="signout.php"><span class="glyphicon glyphicon-log-out"></span> SignOut</a></li>';
	}
 }
	  else
	  {
		  echo'
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-log-in"> </span> Signup / Login <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
             <li><a href="sign1.php">Temple</a></li>
		  <li><a href="sign2.php">Pandit</a></li>
	  
          </ul>';
	  }?>
        </li>
      </ul>
    </div>
  </div> 
  </nav>