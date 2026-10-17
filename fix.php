<h2>Day 3 - DOM XSS - FIXED Version</h2>
<div id="output"></div>

<script>
// FIX 1: innerText - tag la text samjel, execute nahi karnar
var lang = new URLSearchParams(location.search).get('default');
if(lang){
  // Secure method
  document.getElementById('output').innerText = "Selected: " + lang;
}

// FIX 2: Extra safe - encode
// let safeLang = encodeURIComponent(lang);
// document.getElementById('output').innerText = safeLang;
</script>