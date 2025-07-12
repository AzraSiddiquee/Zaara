<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    if ($name && $contact && $email && $message) {
        $to = "azrasiddiquee211@gmail.com"; // Replace with your real email
        $subject = "New Enquiry from CKS Website";
        $body = "Company Name: $name\nContact: $contact\nEmail: $email\nAddress: $message";

        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Enquiry sent successfully!";
        } else {
            echo "Failed to send enquiry.";
        }
    } else {
        echo "All fields are required!";
    }
} else {
    echo "Invalid request method.";
}
?>
