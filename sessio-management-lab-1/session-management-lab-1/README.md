# Day 06 - Session Management Lab | Cookie Manipulation

### Vulnerability: A07 Identification & Authentication Failure - Insecure Cookie Handling

App trusts client-side cookie `security` to decide security level.

### Exploit I Did Tonight 
1. Before: Cookie Value = high (secure mode) - Screenshot 1
2. Opened DevTools > Application > Cookies > http://localhost
3. Changed security cookie from high to low
4. After: Cookie Value = low - Bypass Successful - Screenshot 2
5. 
### Secure Fix (AppSec Engineer level)
- Never trust client cookie for access control
- Use $_SESSION['role'] on server side
- Set cookies with: HttpOnly + Secure + SameSite=Strict
- Regenerate session ID after login

### Screenshots
- high-cookie.png
- low-cookie-bypass.png
