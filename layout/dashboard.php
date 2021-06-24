<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta name="description" content="Aplikasi music">
    <meta name="author" content="Atikah Khoirunnisa">
    <meta name="keywords" content="Website, music">
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
                  <a href="index.php" class="active">Dashboard</a>
                </li>
                <li>
                  <a href="index.php?page=artist_tampil">Artist</a>
                </li>
                <li>
                  <a href="index.php?page=album_tampil">Album</a>
                </li>
                <li>
                  <a href="index.php?page=track_tampil">Track</a>
                </li>
                <li>
                  <a href="index.php?page=played_tampil">Played</a>
                </li>
                <li>
                  <a href="login_logout.php">Logout</a>
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
Copyright &copy;2021 Atikah Khoirunnisa. All Right Reserved
</footer>
</main>
</body>
</html>