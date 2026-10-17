# Day 03 - DOM XSS Lab

### Vulnerability
DOM-based XSS - Client-side JS flaw. Server safe, browser hacked.

### Vulnerable - index.php
```js
document.write("Selected Language: " + lang);
