# Lab 01 - IDOR Vulnerability (Insecure Direct Object Reference)

## What is IDOR?
IDOR is a vulnerability where an attacker can access other users' data by changing the ID parameter in URL.

## Lab Details
- **Platform:** PortSwigger Web Security Academy
- **Lab:** Insecure Direct Object Reference
- **Tools Used:** Burp Suite, Browser

## How I Found It?
1. Logged in with victim account: wiener:peter
2. Clicked on My Account page - URL was like `/my-account?id=wi`
3. Changed id to `carlos` - and I could see Carlos's data & API key!
4. Submitted the API key to solve the lab.

## Proof / Screenshots


- Login with different ID
- Accessing other user account

## Impact
Attacker can read, modify, delete other users' sensitive information just by changing ID.

## Fix / Mitigation
- Implement proper Access Control checks
- Use random unpredictable IDs (UUID)
- Never rely on client-side ID for authorization

## Learning
Learned how ID parameter can be exploited if server does not verify user ownership.
