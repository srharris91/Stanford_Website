<!--#include virtual="header.html" -->

Welcome <?php echo $_POST["firstname"]; ?><br>
Welcome <?php echo $_POST["fname"]; ?><br>
Welcome <?php echo $_POST["email"]; ?><br>
<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
echo "Mail Not Sent yet. Thank you " . $fname . ", we will contact you shortly.";
if(isset($_POST['submit'])){
    $to = "srharris@stanford.edu"; // this is your Email address
    $from = $_POST['email']; // this is the senders Email address
    $first_name = $_POST['fname'];
    $subject = "Form submission:";
    $subject2 = "Copy of your form submission:";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $fname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>

<!--#include virtual="footer.html" -->
