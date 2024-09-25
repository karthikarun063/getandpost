<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>get and Post</title>
  </head>
  <body>
    <form method="Post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>My Name:</label><input type="text" name="name"/>
        <input type="submit"/>
    </form>
    <pre>
      <?php
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo $_POST["name"];
      } else {
        echo "Name doesnt exists";
      }
       ?>
    </pre>
  </body>
</html>
