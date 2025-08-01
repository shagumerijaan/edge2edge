<?php
// Contact Form Handler
require_once __DIR__ . '/include/configweb.php';

$msg = "";

if(isset($_POST['submit'])){
    // Sanitize inputs
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    $phone = sanitizeInput($_POST['phone']);
    $services = sanitizeInput($_POST['services']);
    $location = sanitizeInput($_POST['location']);
    $message = sanitizeInput($_POST['message']);
    
    // Validate inputs
    if(empty($name) || empty($email) || empty($message)) {
        $msg = "<p style='color:red; text-align: center;'>Please fill in all required fields.</p>";
    } elseif(!validateEmail($email)) {
        $msg = "<p style='color:red; text-align: center;'>Please enter a valid email address.</p>";
    } else {
        // Use PHPMailer for sending email
        require('phpmailer/class.phpmailer.php');
        $mail = new PHPMailer();
        
        $subject = "CONTACT FORM - " . $siteName;
        $content = "<h3>New Contact Form Submission</h3>";
        $content .= "<p><strong>Name:</strong> $name</p>";
        $content .= "<p><strong>Email:</strong> $email</p>";
        $content .= "<p><strong>Phone:</strong> $phone</p>";
        $content .= "<p><strong>Services:</strong> $services</p>";
        $content .= "<p><strong>Location:</strong> $location</p>";
        $content .= "<p><strong>Message:</strong> $message</p>";
        
        // SMTP Configuration
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;  
        $mail->Username = "info@edge2edgecleaning.com.au";
        $mail->Password = "@Sukhkaran1993"; // Move this to environment variable
        $mail->Host = "smtp.hostinger.com";
        $mail->Mailer = "smtp";
       
        $mail->AddAddress("info@edge2edgecleaning.com.au", "Edge 2 Edge Cleaning");
        $mail->Subject = $subject;
        $mail->WordWrap = 80;
        $mail->MsgHTML($content);
        $mail->IsHTML(true);
        
        // Set proper From address
        $mail->SetFrom($mailFrom, $siteName);
        $mail->AddReplyTo($email, $name);
        
        if(!$mail->Send()){ 
            $msg = "<p style='color:red; text-align: center;'>Problem sending message. Please try again.</p>";
            logError("Email sending failed: " . $mail->ErrorInfo);
        } else { 
            $msg = "<p style='color:green; text-align: center;'>Thanks for contacting us! We will be in touch with you shortly.</p>";
        }
    }
}
?>