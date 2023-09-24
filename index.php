<!DOCTYPE html>
<html>
<head>
    <title>OTP SMS Sender</title>
</head>
<body>
    <h1>Send OTP via SMS</h1>
    <form method="post" action="send_otp.php">
        <label for="recipient">Recipient Phone Number:</label>
        <input type="text" id="recipient" name="recipient" required /><br />
        <input type="submit" value="Send OTP" />
    </form>
</body>
</html>
