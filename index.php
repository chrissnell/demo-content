<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Hello!</title>
<style type="text/css">
body { font-size:18px; }
.wrapper { max-width: 600px; margin:0 auto; }
</style>
</head>

<body>
<div class="wrapper">
<h1>Welcome to the ECS DevOps Demo!</h1>
<p>This web page is being served from      
   <strong><?php
          echo gethostname();
    ?></strong>
</p>
<p>You are visiting from
   <strong><?php
          echo $_SERVER['REMOTE_ADDR'];
    ?></strong>
</p>
<p></p>
<p>Powered by nginx.</p>
</body>
</html>

