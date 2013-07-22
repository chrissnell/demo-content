<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Hello!</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
<div class="container">

  <!-- Main hero unit for a primary marketing message or call to action -->
  <div class="hero-unit">
    <h1>Welcome to the ECS DevOps Demo!</h1>
    <p>This is a simple two-tiered PHP app to demonstrate the power of Chef provisioning in the Rackspace Cloud</p>
  </div>

  <!-- Example row of columns -->
  <div class="row">
    <div class="span6">
      <h2>About This Server...</h2>
	  <p>This web page is being served from      
	   <strong>
	  	<?php
	     echo gethostname();
	     ?>
	   </strong>
	  </p>
    </div>
    <div class="span6">
      <h2>About You</h2>
      <p>You are visiting from      
	   <strong>
	  	<?php
	     echo $_SERVER['REMOTE_ADDR'];
	     ?>
	   </strong>
	  </p>
   </div>
  </div>
      <hr>

      <footer>
        <p>&copy; Powered by Chef, Ubuntu Linux, Apache, PHP, and the Rackspace Cloud </p>
      </footer>

    </div> <!-- /container -->

