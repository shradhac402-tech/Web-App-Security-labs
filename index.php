<h2>Day 3 - DOM XSS Lab</h2>
<script>
var lang = new URLSearchParams(location.search).get('default');
if(lang) document.write("Selected: " + lang);
else document.write("?default=English add in URL");
</script>