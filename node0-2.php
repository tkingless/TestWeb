<!DOCTYPE html>
<html>
<body>

<h1>Child Page (php)</h1>

<p>node 0-2</p>

<? phpinfo(); ?>

<?php

$con = mysql_connect("localhost","root","a97077");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  else
  {
  	echo "connect success!<br /><br />";
  	mysql_select_db("cdcol");
  }

echo "Hello World!<br /><br />";

?>

<form action="node0-2-0.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<a href='index.html'>Back to index page</a>

</body>
</html>