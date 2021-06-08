<?php 
if(isset($_POST['submit'])){
    $to = "hn84909103@hotmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form my website";
    $message = $_POST['message'];
 

    $headers = "From: " . $from;
    $txt = "You have received an email from " . $name . "\n\n" . $message;


    mail($to,$subject,$txt,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
