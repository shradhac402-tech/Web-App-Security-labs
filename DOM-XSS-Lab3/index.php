<!DOCTYPE html>
<html>
<head><title>Day 03 - DOM XSS Vulnerable</title></head>
<body>
<h2>DOM XSS Lab - Vulnerable</h2>
<p id="lang"></p>
<script>
    // VULNERABLE: direct document.write / innerHTML
    const params = new URLSearchParams(window.location.search);
    let lang = params.get('default');
    if(lang){
        document.write("Selected Language: " + lang);
    } else {
        document.write("Add ?default=English in URL");
    }
    // Payload: ?default=<img src=x onerror=alert('Dom-XSS-Done')>
</script>
</body>
</html>
