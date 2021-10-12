<?php 
    require __DIR__ . '/database/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>PHP-Disc</title>
</head>
<body>
    <header>
        <div id="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/1024px-Spotify_logo_without_text.svg.png" alt="Logo Spotify">
        </div>
    </header>

    <main>
        <div class="container">
            <?php 
                foreach ($db as $disc) {
                    echo '<div class="disc">';
                    echo '<img class="disc_cover" src= "' .  $disc['poster'] . '" alt= "disc cover">';
                    echo '<h3>' . $disc['title'] . '</h3>';
                    echo '<div class="disc_text">' . $disc['author'] . '</div>';
                    echo '<div class="disc_text">' . $disc['year'] . '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </main>
</body>
</html>