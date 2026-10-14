# Lab 1: IDOR - Insecure Direct Object Reference

Vulnerability: OWASP Top 10 A01:2021 - Broken Access Control
Severity: High
Tool: Burp Suite Community Edition
Lab Source: PortSwigger Web Security Academy

What is IDOR?
Insecure Direct Object Reference (IDOR) is an access control vulnerability where an application exposes a direct reference to an internal object. By manipulating the parameter value, User A can access User B's data without authorization.

Vulnerable Endpoint Example:
`GET /my-account?id=123`

Steps to Reproduce:
1. Login with a valid user account: victim@example.com
2. Navigate to My Account page and intercept the request in Burp Suite
3. Observe the parameter: `/my-account?id=wiener`
4. Change the parameter value to another user: `id=carlos`
5. Forward the request - The application returns the other user's data, leading to Account Takeover

