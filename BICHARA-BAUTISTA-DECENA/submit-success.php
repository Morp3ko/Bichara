<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Submission Result</title>
</head>
<body>

    <h1>Form Submission Received Successfully</h1>
    <p>Below is the detailed information you entered into the correspondence system:</p>
    
    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $content = nl2br(htmlspecialchars($_POST['content']));
        
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><td><strong>Field</strong></td><td><strong>Submitted Value</strong></td></tr>";
        echo "<tr><td>Email Address</td><td>" . $email . "</td></tr>";
        echo "<tr><td>Subject Line</td><td>" . $subject . "</td></tr>";
        echo "<tr><td>Content Body</td><td>" . $content . "</td></tr>";
        echo "</table>";
    } else {
        echo "<p style='color: red;'>Error: No direct script access or empty post payload detected.</p>";
    }
    ?>

    <br>
    <a href="index.php?page=home">Return to Home Directory</a>

</body>
</html>