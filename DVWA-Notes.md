# DVWA - Damn Vulnerable Web App (TryHackMe)

Status: Completed ✅ | My First Security Lab
Platform: TryHackMe - AttackBox

## 1. What is DVWA?
DVWA is a deliberately vulnerable web application designed for practicing web security testing.

## 2. Cross-Site Scripting (XSS)
- Low Level Payload: `<script>alert(1)</script>`
- Image Payload: `<img src=x onerror=alert('Hacked by Shradha')>`
- Impact: Attacker can steal cookies, session hijacking
- Mitigation: Input validation, Output encoding, Content Security Policy (CSP)

## 3. SQL Injection (SQLi)
- Payload Used: `' OR '1'='1`
- Result: Authentication bypass - logged in as admin without password
- Impact: Full database compromise
- Mitigation: Use Prepared Statements, Parameterized Queries, Least Privilege

## 4. Cross-Site Request Forgery (CSRF)
- Observation: Can force logged-in user to perform unwanted actions
- Mitigation: Anti-CSRF tokens, SameSite cookies

## 5. My Learnings
- Intercepted requests using Burp Suite
- Understood OWASP Top 10 mapping with DVWA
- Completed first TryHackMe room

## Tools Used
- TryHackMe AttackBox
- Burp Suite Community
- GitHub for Documentation

## Author
Shradha C - Aspiring Application Security Engineer
GitHub: shradhac402-tech/Web-App-Security-labs
