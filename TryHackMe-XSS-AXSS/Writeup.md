# TryHackMe | XSS (AXSS) Room - Writeup


**Room Link:** https://tryhackme.com/room/axss  
**Status:**  Completed | **Points:** 160 | **Tasks:** 10

### I just completed XSS room on TryHackMe!
Explore in-depth the different types of XSS and their root causes.

###  What I Learned

**1. Types of XSS**
- **Reflected XSS:** Payload URL madhe yeto, server reflect karto.
- **Stored XSS:** Payload database madhe store hoto (similar to Blind XSS).
- **DOM Based XSS:** Ha room cha main topic hota. Fictional static site var demo kela - server cha role nahi, sagla browser madhech.

**2. Key Q&A**
- DOM XSS server side hota ka? -> `Nay`
- Client side? -> `Yea`
- Insecure code fix: `document.write()` la `textContent` + `encodeURIComponent()` ne replace karaycha.
- Session token kuthun milta? -> `document.cookie`

**3. Filter Bypass Trick**
Simple `<script>` block zala tar HTML entities vapra:
```html
<IMG SRC="jav&#x0D;ascript:alert('XSS');">
