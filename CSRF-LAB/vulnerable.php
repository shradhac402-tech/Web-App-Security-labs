<?php
session_start();
// Simulating user logged in
if(!isset($_SESSION['user'])) $_SESSION['user'] = 'shradha';

if(isset($_POST['email'])){
    // VULNERABLE - No CSRF token check!
    file_put_contents("changed.txt", $_POST['email']);
    echo "Email changed to: " . $_POST['email'];
}
?>
<h2>Change Email - Vulnerable Page</h2>
<form method="POST">
    New Email: <input name="email" value="shradha@college.com">
    <button>Update</button>
</form>
