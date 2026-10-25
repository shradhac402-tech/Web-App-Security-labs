<?php
if(isset($_GET['name'])){
  // FIX: htmlspecialchars prevents XSS
  echo "<h2>Hello " . htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8') . "</h2>";
}
?>
<form method="GET">
  Enter Name: <input type="text" name="name">
  <input type="submit">
</form>
