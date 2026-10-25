## Reflected XSS Lab
Vuln: echo $_GET['name'] directly
PoC: ?name=<script>alert(document.cookie)</script>
Fix: htmlspecialchars($_GET['name'], ENT_QUOTES)
Status: Exploited & Fixed
