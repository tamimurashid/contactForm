Setting Up a Simple Contact Form for Sending Emails Using PHPMailer

This guide will help you create a basic contact form that sends emails from your website to your inbox using PHPMailer. Follow these steps to set it up:

    Create a Configuration File:
        Create a new file called configure.php.
        Inside this file, define two variables:
            $youremail = 'youremail@gmail.com'; // Your Gmail address where you will receive emails.
            $yourkey = 'your-security-key'; // Your security key (generated from Gmail).

    Set Up Your Contact Form:
        In your contact.html or index.html, where your contact form is located, ensure you set the form’s action and method like this:

        html

        <form action="email-processor.php" method="post">

        This directs the form data to your email-processor.php script for email processing.

    Handle Redirection Properly:
        If your project uses multiple files, make sure you handle redirection properly after the form submission. For example, you can redirect users to a success or failure page after the email is sent.

    Design Your Email Template:
        You can either customize your own HTML template for the email that will be sent or use the default template provided in the email-processor.php file.

How to Generate a Gmail App Password for PHPMailer

If you're using Gmail with PHPMailer, you need to generate an app password instead of using your regular Gmail password. Follow these steps to create an app password:

    Enable 2-Step Verification:
        Go to your Google Account.
        Click on "Security" in the left menu.
        Under "Signing in to Google," enable 2-Step Verification.

    Generate an App Password:
        After enabling 2-Step Verification, go back to the "Security" section.
        Under "Signing in to Google," click on App passwords.
        Choose "Mail" as the app and "Other (Custom name)" for the device. You can name it PHPMailer.
        Google will generate a 16-character password. Use this password in your configure.php file:

        php

        $yourkey = 'your-16-character-app-password';

Following these steps will allow you to set up a contact form using PHPMailer and Gmail securely. You can also modify the design of your email sender form to match the style of your website.