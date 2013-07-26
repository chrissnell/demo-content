<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>RAX DevOps Demo Grid!</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<style>
	body{
	    margin-top: 10px; margin-bottom: 0px; margin-left: 0px; margin-right: 0px;
	}

</style>
</head>

<?
  $starttime = microtime(true);

  $conn = pg_connect("host=demogrid-db-01.raxdemogrid.com dbname=demogrid user=demogrid password=<%= @db_password %>");
  $query = "SELECT city, region, country FROM locations WHERE locations.id = ( SELECT location_id FROM blocks WHERE inet_to_bigint('" . $_SERVER['REMOTE_ADDR'] . "') BETWEEN start_ip AND end_ip LIMIT 1)";
  $result = pg_query($conn, $query);
  while ($row = pg_fetch_row($result)) {
    $loc = $row[0] . ", " . $row[1] . ", " . $row[2];
  }
  $pgver = pg_version($conn);

  $endtime = microtime(true);
  $duration = ($endtime - $starttime) * 10; 

?>


<body>
<div class="container">
  <div class="hero-unit">
   <table>
    <tr>
     <td align=middle valign=middle>
      <img src="http://326f2037fcf1876fe63a-276fe3b18c25bc214b3f361be23c629e.r98.cf1.rackcdn.com/wolf-logo.png" width=154 height=46 style="padding-bottom: 10px">
     </td>
     <td align=left valign=middle>
      <h2 style="color: #880000">Welcome to the ECS DevOps Demo!</h2>
       <p>A simple two-tiered PHP app to demonstrate the power of Chef provisioning in the Rackspace Cloud</p>
     </td>
    </tr>
   </table>
  </div>
  <!-- Example row of columns -->
  <div class="row">
    <div class="span1">
     <img src="http://326f2037fcf1876fe63a-276fe3b18c25bc214b3f361be23c629e.r98.cf1.rackcdn.com/svr-icon.png" height=116 width=148>
    </div>
    <div class="span5">
      <h2>About This Server...</h2>
    </div>
    <div class="span1">
     <img src="http://326f2037fcf1876fe63a-276fe3b18c25bc214b3f361be23c629e.r98.cf1.rackcdn.com/dude-icon.png" height=116 width=148>
    </div>
    <div class="span5">
      <h2>About You</h2>
    </div>
   </div>
   <div class="row">
    <div class="span5 offset1">
	  <p><i class="icon-circle-arrow-right"></i> This web page is being served from      
	   <strong>
	  	<?php
	     echo gethostname();
	     ?>
	   </strong>
	  </p>
          <p><i class="icon-circle-arrow-right"></i> System load average:
           <strong>
                <?php
                  $load = sys_getloadavg();
                  printf("%.2f", $load[0]);
             ?>
           </strong>
          </p>
          <p><i class="icon-time"></i> The most recent database query took 
           <strong>
                <?php
                  printf("%.1f", $duration);
             ?> milliseconds
           </strong>
          </p>
          <p><i class="icon-circle-arrow-right"></i> This database server is running
            <strong> PostgreSQL v
                <?php
                  echo $pgver['server'];
                 ?>
             </strong>
          </p>

    </div>
    <div class="span5 offset1">
      <p><i class="icon-flag"></i> You are visiting from      
	   <strong>
	  	<?php
	     echo $_SERVER['REMOTE_ADDR'];
	     ?>
	   </strong>
      </p>
      <p><i class="icon-globe"></i> Geographic location:
            <strong>
              <?php
               echo $loc
              ?>
            </strong>
      </p>
   </div>
  </div>
      <hr>

      <footer>
        <p><i class="icon-ok-sign"></i> Powered by Chef, Ubuntu Linux, Apache, PHP, the Rackspace Cloud, and the <strong>Wolf Pack</strong>.</p>
      </footer>

    </div> <!-- /container -->


