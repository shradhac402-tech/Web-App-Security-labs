<?php
$users = [
  "123" => ["name" => "Shradha (You)", "email" => "shradha@user.com", "password" => "user123", "role" => "user"],
  "124" => ["name" => "Carlos (Admin Victim)", "email" => "carlos@admin.com", "password" => "admin_super_secret_124", "role" => "admin"],
  "125" => ["name" => "Wiener", "email" => "wiener@test.com", "password" => "peter", "role" => "user"]
];

$id = $_GET['id'] ?? '123';

echo "<h2>Lab 1: IDOR - My Account</h2>";
echo "<p>Logged in as ID: $id</p><hr>";

if (isset($users[$id])) {
    echo "<b>Name:</b> " . $users[$id]['name'] . "<br>";
    echo "<b>Email:</b> " . $users[$id]['email'] . "<br>";
    echo "<b>Password:</b> " . $users[$id]['password'] . "<br>";
    echo "<b>Role:</b> " . $users[$id]['role'] . "<br>";
} else {
    echo "User not found!";
}

echo "<hr><p>Try: ?id=123 , ?id=124 , ?id=125</p>";
?>
