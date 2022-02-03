<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" action="index.php" enctype="multipart/form-data">
      <label for="Nom">Renseignez votre nom ici:</label>
      <input type="text">
    </br>
      <label for="Img">Mettez votre image ici:</label>
      <input type="file" class="avatar" id="avatar" name="avatar">
      <button type="submit" class="envoyer">envoyer</button>
    </form>

    liste des images :
    <?php
    $rep=opendir("uploads/");
    while ($lect=readdir($rep)){
      if($lect != '.' && $lect != '..') {
        $url_img = "uploads/$lect";
        echo "<div><img src=\"$url_img\" height='100'></div>";
      }
    }
    ?>


  </body>
</html>

<?php
  var_dump($_FILES);

  $target = "uploads/".$_FILES["avatar"]["name"];
  if(is_uploaded_file($_FILES["avatar"]["tmp_name"])) {
   move_uploaded_file($_FILES["avatar"]["tmp_name"], $target);}
 ?>

 Ceci est une modification
