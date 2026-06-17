<h1>Contact Us</h1>
<form action="index.php?page=contact" method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email Address:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Subject:</label><br>
    <input type="text" name="subject" required><br><br>

    <label>Content of the Letter:</label><br>
    <textarea name="content" rows="5" required></textarea><br><br>

    <button type="submit">Submit</button>
</form>

<?php
// Simple handling logic to show the form works
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<hr><p>Thank you, your message has been received!</p>";
}
?>
