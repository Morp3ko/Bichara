<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    </head>
<body>

    <nav>
        <a href="index.php?page=home">Home</a> | 
        <a href="index.php?page=projects">Projects</a> | 
        <a href="index.php?page=jobs">Job Postings</a> | 
        <a href="index.php?page=testimonies">Testimonies</a> | 
        <a href="index.php?page=contact">Contact Us</a>
    </nav>

    <hr>

    <main>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch ($page) {
            case 'projects':
                include 'projects.php';
                break;
            case 'jobs':
                include 'jobs.php';
                break;
            case 'testimonies':
                include 'testimonies.php';
                break;
            case 'contact':
                include 'contacts.php';
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
