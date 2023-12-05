<?php
// Example PHP code (for illustration purposes)
// You should add your own server-side logic as needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form submission
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Perform additional validation and processing as needed
    // For a production environment, consider using a database to store form submissions
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Food Delivery</title>
</head>
<body>
    <!-- Your existing HTML structure goes here -->

    <section id="contact">
        <h2>Contact Us</h2>
        <form method="post" action="index.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Food Delivery</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
