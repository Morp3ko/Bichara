<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BuildCorp Construction</title>

    <link rel="stylesheet" href="styles.css">

</head>
<body>

    <nav>
        <a href="index.php?page=home">Home</a> | 
        <a href="index.php?page=about">About the Company</a> | 
        <a href="index.php?page=gallery">Gallery</a> | 
        <a href="index.php?page=clients">Clients</a> | 
        <a href="index.php?page=news">News and Events</a> | 
        <a href="index.php?page=contact">Contact Us</a>
    </nav>

    <hr>

    <main>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch ($page) {
            case 'about':
                include 'about.php';
                break;
            case 'gallery':
                include 'gallery.php';
                break;
            case 'clients':
                include 'clients.php';
                break;
            case 'news':
                include 'news.php';
                break;
            case 'contact':
                include 'contacts.php';
                break;
            case 'submit-success':
                include 'submit-success.php';
                break;
            case 'home':
            default:
                include 'home.php';
                break;
        }
        ?>
    </main>

</body>
</html>