<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = $_POST["recipient"];
    
    // Generate a 6-digit OTP
    $otp = rand(100000, 999999);
    
    // Replace with your Excite SMS API key
    $api_key = 'YOUR_API_KEY_HERE';
    
    // Define the API URL
    $api_url = 'https://gateway.excitesms.tech/api/v3/sms/send';
    
    // Create an array with the SMS data
    $sms_data = [
        "recipient" => $recipient,
        "sender_id" => "ExciteSMS",
        "message" => "Your OTP is: " . $otp,
    ];
    
    // Initialize cURL session
    $ch = curl_init($api_url);
    
    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json',
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key,
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($sms_data));
    
    // Execute cURL session
    $response = curl_exec($ch);
    
    // Check for errors
    if (curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
    } else {
        // Redirect to a verification page with the OTP in the URL
        header("Location: verify_otp.php?otp=$otp&recipient=$recipient");
        exit();
    }
    
    // Close cURL session
    curl_close($ch);
}
?>
