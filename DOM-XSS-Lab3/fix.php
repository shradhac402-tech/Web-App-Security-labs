<!DOCTYPE html>
<html>
<head><title>Day 03 - DOM XSS Fixed</title></head>
<body>
<h2>DOM XSS Lab - FIXED</h2>
<div id="output"></div>
<script>
    const params = new URLSearchParams(window.location.search);
    let lang = params.get('default');
    let out = document.getElementById('output');
    if(lang){
        // FIXED: innerText - treats as text, not HTML
        out.innerText = "Selected Language: " + lang;
    } else {
        out.innerText = "Add ?default=English in URL - Now Safe!";
    }
</script>
</body>
</html>
