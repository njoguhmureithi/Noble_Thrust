<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $subject = trim($_POST["subject"]);
  $message = trim($_POST["message"]);

  $to = "peterachar@gmail.com";

  $email_subject = "New Contact Form Submission: $subject";
  $email_body = "You have received a new message from your website contact form.\n\n".
                "Name: $name\n".
                "Email: $email\n".
                "Message: \n$message\n";

  $headers = "From: $email\n";
  $headers .= "Reply-To: $email\n";
  $headers .= "Content-type: text/plain; charset=UTF-8\n";

  if(mail($to, $email_subject, $email_body, $headers)) {
    // Email sent successfully
    echo "Thank you for contacting us. Your message has been sent.";
  } else {
    // Error sending email
    echo "Sorry, there was a problem sending your message. Please try again later.";
  }
}
?>
