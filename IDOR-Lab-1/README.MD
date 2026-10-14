
🔓 Day 01 - IDOR Lab | Insecure Direct Object Reference

From Student to Hacker - My First Bug!

Vulnerability Type: IDOR (OWASP Top 10 - A01: Broken Access Control)  
Severity: 🔴 High - CVSS 7.5  
Status: Found & Fixed

---

🎯 What is IDOR?
Server checks `?id=2` but doesn't check "Is the logged-in user allowed to see ID 2?" So I can see anyone's data by changing the number.

💥 How I Hacked It (POC)

Step 1 - My Account:
http://localhost/security-labs/day-01-IDOR/?id=1
=> Rohit (Tu) | Balance: Rs. 500 | Role: Student

Step 2 - Changed ID to 2:
http://localhost/security-labs/day-01-IDOR/?id=2
=> Admin | admin@bank.com | Balance: Rs. 5,00,000 | Role: Admin - SECRET

Boom! Admin account hacked just by changing 1 to 2.

📸 Proof

1. Before Fix - Data Leak
`![idor-leak](images/id2-admin.png)`
> Here I accessed Admin data with Rs. 5 Lakh balance.

2. After Fix - Access Denied
`![fixed](images/access-denied.png)`
> After adding auth check.

🔍 Vulnerable Code
```php
$id = $_GET['id'] ?? '1';
$user = $users[$id] ?? $users['1']; // No Authorization!
✅ My Fix
$logged_in_user = "1"; // Session user
if ($id != $logged_in_user) {
    die("❌ Access Denied! You can't see ID $id");
}
💰 Real World Impact
In real banking app, this bug = you can see other customers' bank statements, emails, balance. Companies pay *$500 - $3000* for this bug on Bugcrowd/HackerOne.

🛠️ Lab Setup
- XAMPP / Apache
- PHP
- Chrome DevTools



