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
      // Pour le mécanisme de déconnexion
      if (isset($_POST['deconnexion'])) {
        session_unset();
	echo "<p>Vous avez bien été déconnecté.</p>";
      }

      if (isset($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];
      }
      if (isset($_SESSION['username'])) {
        header('Location: dabou.php');
      }
      else {
    ?>
      <h2>Je teste un truc.</h2>
      <p>Et je trouve ça marrant ouais.</p>
      <br>
      <form method="post" action="index.php">
        <label for="username">Nom, pseudo ou n'importe: </label>
	<input type="text" name="username" id="username" required/>
        <input type="submit" value="Go !">
      </form>
    <?php
      }
    ?>
     
  </body>
</html>
