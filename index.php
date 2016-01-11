<html>
<form action="xss.php" method="POST">
<input type="text" name="input">
<input type="submit">
</form>
-----------------------------------------<br />

<?php
  echo $_POST["input"];
?>
<br />
</html>
