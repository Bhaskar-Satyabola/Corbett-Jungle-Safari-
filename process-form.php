<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $date = $_POST["date"];
    $safariType = $_POST["safariType"];
    $timing = $_POST["timing"];
    $message = $_POST["message"];



    // Retrieve other form fields as needed
    
    $to = "bhaskarsatyabola.bs11@gmail.com"; // Your Gmail address
    $subject = "New Booking from $name";
    $message = "Name: $name\nEmail: $email\nContact:  $contact\nOnDate:  $date\nSafariType:  $safariType\nSafariTiming: $timing\nMessage: $message\n "; // Add more fields as needed

    // Send the email
    if (mail($to, $subject, $message)) {
        echo "Booking request sent successfully!";
    } else {
        echo "Sorry, there was an error sending your booking request.";
    }
}
?>
