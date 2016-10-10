<?php 
if(isset($_POST['submit'])){
    $to = "info@betterpurchasing.net"; // this is your Email address
    $from = $_POST['contactEmail']; // this is the sender's Email address
    $name = $_POST['contactName'];
    $subject = $_POST['contactSubject'];
    $message = $name . " wrote the following:" . "\n\n" . $_POST['contactMessage'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
        }
?> 
