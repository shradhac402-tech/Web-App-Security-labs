import hashlib
import secrets
import time

print("=== PRACTICAL NO. 6 - PASSWORD STORAGE ===")

# BAD METHOD
print("\n[ BAD ] Plain text: MyPass@123 -> Hacker la direct disel!")

# GOOD METHOD
password = "MyPass@123"
salt = "8f3a9c2d" # random salt
hashed = hashlib.sha256((password + salt).encode()).hexdigest()

print("\n[ GOOD - Secure Storage ]")
print(f"Original: {password}")
print(f"Salt: {salt}")
print(f"Hash stored in DB: {hashed}")

# LOGIN TEST
print("\n--- LOGIN TEST ---")
entered = "MyPass@123"
check = hashlib.sha256((entered + salt).encode()).hexdigest()
if check == hashed:
    print("MyPass@123 -> Login SUCCESS ✅")
else:
    print("Login FAILED")

# RECOVERY TEST
print("\n--- RECOVERY TEST ---")
token = secrets.token_urlsafe(16)
print(f"Email: shradha@college.com")
print(f"Reset Link: /reset?token={token}")
print("Valid: 10 min only")
print("\nPassword Reset Done ✅")
