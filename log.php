<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>logs</title>
    <link rel="shortcut icon" href="favicon2.png">
  </head>
  <body>
    <form class="" action="#" method="post">
      <input type="password" name="pass">
      <input type="submit" name="btn" value="Ver">
    </form>
    <?php
    $pass = $_POST["pass"];
    $pass2 = "hacker55";
    if ($pass == $pass2) {

    	$f = fopen("n.txt", "r");
    	while(!feof($f)) {
    	    echo fgets($f) . "<br />";
    	}
    	fclose($f);
    }
	  ?>
  </body>
</html>
