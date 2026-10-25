<?php
if(isset($_GET['name'])){
  echo "<h2>Hello " . $_GET['name'] . "</h2>";
}
?>
<form method="GET">
  Enter Name: <input type="text" name="name">
  <input type="submit">
</form>
