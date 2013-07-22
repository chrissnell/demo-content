<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Hello!</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<style>
	body{
	    margin-top: 10px; margin-bottom: 0px; margin-left: 0px; margin-right: 0px;
	}
</style>
</head>
<body>
<div class="container">
  <div class="hero-unit">
    <img src="http://images.cdn.rackspace.com/header/logo-rackspace.png" width=154 height=46 style="padding-bottom: 10px">
    <h2 style="color: #880000">Welcome to the ECS DevOps Demo!</h2>
    <p>This is a simple two-tiered PHP app to demonstrate the power of Chef provisioning in the Rackspace Cloud</p>
  </div>

  <!-- Example row of columns -->
  <div class="row">
    <div class="span6">
      <h2>About This Server...</h2>
	  <p><i class="icon-circle-arrow-right"></i> This web page is being served from      
	   <strong>
	  	<?php
	     echo gethostname();
	     ?>
	   </strong>
	  </p>
    </div>
    <div class="span6">
      <h2>About You</h2>
      <p><i class="icon-globe"></i> You are visiting from      
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
        <p><i class="icon-ok-sign"></i> Powered by Chef, Ubuntu Linux, Apache, PHP, and the Rackspace Cloud </p>
      </footer>

    </div> <!-- /container -->

