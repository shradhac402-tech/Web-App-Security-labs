<?php
// VULNERABLE SSRF - Day 10 by Shradha
echo "<h2>SSRF Lab - Website Preview</h2>";
if(isset($_GET['url'])){
    $url = $_GET['url'];
    echo "Fetching: $url <br><hr>";
    // VULNERABLE - No check!
    $data = file_get_contents($url);
    echo $data;
} else {
    echo 'Use: ?url=http://example.com';
}
?>
<form>
    Enter URL: <input name="url" value="http://example.com" size="40">
    <button>Fetch</button>
</form>
<h3>Try these for PoC:</h3>
<ul>
    <li>?url=http://127.0.0.1</li>
    <li>?url=http://localhost</li>
    <li>?url=file:///etc/passwd (if allow_url_fopen)</li>
</ul>
