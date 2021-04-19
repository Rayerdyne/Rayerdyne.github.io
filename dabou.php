<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Si t'as une idée pour le titre, qqn, dis-moi</title>
    <meta charset="utf-8">
  </head>

  <body>
    <?php
      if (!isset($_SESSION['username'])) {
        echo '<p style"color: red">Oups c\'est pas censé faire ça</p>';
      }
      
      echo '<h2>Salut ' . $_SESSION['username'] . '!</h2><br>';
      
      if (isset($_POST['boom'])) {
        // foutre la merde
	//echo "yes yes";
	$file = fopen("test.txt", "w");
	$txt = $_SESSION['username'] . " !\n";
	fwrite($file, $txt);
	fclose($file);
	echo "Sucess. " . $txt;
      }
    ?>

    <form action="dabou.php" method="post">
      <input type="hidden" name="boom" value="salut toi">
      <input type="submit" value="EXPLOSER LE MONDE">
    </form>
    <br>
    <form action="index.php" method="post">
      <input type="hidden" name="deconnexion" value="salut toi">
      <input type="submit" value="Déconnexion">
    </form>
  </body>
</html>
