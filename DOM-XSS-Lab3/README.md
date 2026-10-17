# Day 03 - DOM XSS Lab

### Vulnerability
DOM-based XSS - flaw in client-side JS, not server.

### Vulnerable Code (index.php)
```js
document.write("Selected Language: " + lang);
