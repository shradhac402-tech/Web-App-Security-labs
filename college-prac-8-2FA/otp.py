import random, time
print("=== PRACTICAL 8 - 2FA OTP ===")
otp = random.randint(100000, 999999)
expiry = time.time() + 30
print(f"Your OTP: {otp}")
print("Valid for 30 seconds!")

# Simulate user entering
time.sleep(2)
entered = otp # correct otp
if time.time() < expiry and entered == otp:
    print("OTP Verified - 2FA SUCCESS ✅")
else:
    print("OTP Expired/Invalid ❌")
