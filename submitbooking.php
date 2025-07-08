<?php
// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture and sanitize the form inputs
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $whatsapp = htmlspecialchars(trim($_POST["whatsapp"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $date = htmlspecialchars(trim($_POST["date"]));

    // Basic validation
    if (empty($name) || empty($email) || empty($whatsapp) || empty($phone) || empty($date)) {
        echo "<h2 style='color: red;'>Please fill in all required fields.</h2>";
        exit;
    }

    // (Optional) You can send the data via email or store in DB here

    // Display success message
    echo "<h2 style='color: green;'>Thank you, <strong>$name</strong>!<br>Your booking for <strong>$date</strong> has been received.</h2>";
    echo "<p>We will contact you via WhatsApp: <strong>$whatsapp</strong> or phone: <strong>$phone</strong>.</p>";
} else {
    echo "<h2 style='color: red;'>Invalid request.</h2>";
}
?>
