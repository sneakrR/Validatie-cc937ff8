<!DOCTYPE html>
<html>
<body>

<form action="" method="post" target="_blank">
 Email: <input type="email" name="fname"><br>
  <input type="submit" value="Submit">
</form>

<?php

if (isset($_POST["fname"])) {
    echo ("Emailadress is geldig!");
} else {
    echo ("Emailadress is niet geldig");
}

?>

</body>
</html>
