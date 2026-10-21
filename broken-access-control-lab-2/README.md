Day 07 - User Role Controlled by Request Parameter
OWASP A01 - Broken Access Control

Exploit: Changed Admin cookie from false to true
URL: /my-account?id=wiener -> /admin
Impact: Normal user wiener got Admin access
Fix: Server-side session check - if(!isAdmin) deny();
