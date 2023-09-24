# OTP SMS PHP Application

This is a PHP application for sending one-time passwords (OTPs) via SMS using the Excite SMS API. Users can request an OTP, which is sent to their phone number, and then verify the OTP for authentication.

![OTP SMS PHP Application](screenshot.png)

## Features

- Send OTPs via SMS using the Excite SMS API.
- Basic form for entering the recipient's phone number.
- OTP verification with immediate feedback.
- Basic CSS styling for a clean and user-friendly interface.

## Technologies Used

- PHP
- cURL for making API requests
- HTML and CSS for the user interface

## Getting Started

To get started with this application, follow these steps:

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/kazashim/otp-sms-php.git
   cd otp-sms-php
   ```

1. Open the `index.php` file in your web browser. You should see the OTP request form.

2. Fill out the recipient's phone number and click the "Send OTP" button to request an OTP.

3. You will be redirected to the OTP verification page. Enter the OTP received via SMS and click "Verify OTP."

4. A confirmation message will be displayed indicating whether the OTP verification was successful or not.

## Usage

1. Fill out the recipient's phone number in the form provided on the OTP request page.
2. Click the "Send OTP" button to request an OTP.
3. You will be redirected to the OTP verification page. Enter the OTP received via SMS and click "Verify OTP."
4. A confirmation message will inform you whether the OTP verification was successful.

## API Configuration

To use this application, you need to configure the Excite SMS API credentials. Modify the `$api_key` variable in the `send_otp.php` file to include your API key:

```php
// Replace with your Excite SMS API key
$api_key = 'YOUR_API_KEY_HERE';
```

## Styling

The application includes basic CSS styling for a clean and user-friendly interface. You can customize the CSS further by editing the `style.css` file in the `css` directory.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgments

- Excite SMS for providing the SMS gateway API.

---

Secure your application with OTPs!
```
