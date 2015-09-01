<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>re:Invent ALM Bootcamp</title>
    <style type="text/css">
     body {
       font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
       color: #d4d8dd;
       background-color: #1b1b20;
       margin-top: 4em;
       text-align: center;
     }

     h1 {
       color: #febd15;
     }

     #container {
       width: 500px;
       margin: 0 auto;
     }

     #logo {
       width: 268px;
       height: 55px;
     }
    </style>
  </head>
  <body>
    <div id="container">
      <img src="reinvent.png" id="logo" alt="AWS re:Invent">
      <h1>Application Lifecycle Management Bootcamp</h1>
      <p>
	<?php
	require_once('src/Sample.php');
	$obj = new Sample();
	echo $obj->helloWorld();
	?>
      </p>
      <?php
      $instance_id = file_get_contents("http://169.254.169.254/latest/meta-data/instance-id");
      $local_ipv4 = file_get_contents("http://169.254.169.254/latest/meta-data/local-ipv4");
      $instance_type = file_get_contents("http://169.254.169.254/latest/meta-data/instance-type");

      $article = "a";
      switch(substr($instance_type, 0, 1)) {
        case "m";
        case "r";
        case "i";
        case "h";
	  $article = "an";
        break;
      }
      
      ?>
      
      <p>
      <?php echo "This is instance <tt>{$instance_id}</tt>, {$article} <tt>{$instance_type}</tt> at <tt>{$local_ipv4}</tt>." ?>
      </p>
    </div>
  </body>
</html>
