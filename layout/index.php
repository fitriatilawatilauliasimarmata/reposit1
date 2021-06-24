<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta name="description" content="Aplikasi music">
    <meta name="author" content="Fitria Tilawatil Simarmata">
    <meta name="keywords" content="Website, music, calssical">
    <title>Aplikasi sistem informasi music </title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/Style.css">
</head>
<body>
    <main>
        <header>
            <img src= "<?php echo ASSET; ?>images/music.jpg.jpg" alt="[IMG]">
        </header>

        <nav>
            <ul>
                <li>
                  <a href="index.php" class="active">Home</a>
                </li>
                <li>
                  <a href="index.php?page=login_form">Login</a>
                </li>
            </ul>
         </nav>

<section>
    <?php
        if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main_index.php";
        }
    ?>
</section>

<footer>
Copyright &copy;2021 Fitria Tilawatil Simarmata. All Right Reserved
</footer>
</main>
</body>
</html>