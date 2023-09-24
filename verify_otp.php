<!DOCTYPE html>
<html>
<head>
    <title>OTP Verification</title>
</head>
<body>
    <h1>OTP Verification</h1>
    <?php
    $entered_otp = $_POST["entered_otp"];
    $expected_otp = $_GET["otp"];
    $recipient = $_GET["recipient"];
    
    if ($entered_otp == $expected_otp) {
        echo '<p>OTP Verified successfully!</p>';
    } else {
        echo '<p>OTP Verification failed. Please try again.</p>';
    }
    ?>
    <p><a href="index.php">Send Another OTP</a></p>
</body>
</html>
