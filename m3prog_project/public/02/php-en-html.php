<?php
    $title = "HTML & PHP";
    $url = "https://cdn.discordapp.com/attachments/932011932679036998/1154403732252008568/IMG_5716.jpg?ex=65fc3141&is=65e9bc41&hm=c1fffe1af5243ef63a5dbb1f55f4129c20d113acb0ba7a7f208010a1027f0e36&";
    $imageTitle = "Max Verstappen";
    $github = "maaike5";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
</head>
<body>
    <h1><?php echo $title;?></h1>
    <img src="<?php echo $url;?>" alt="<?php echo $imageTitle;?>"></img>
    <section>
        <h1>Maker: <?= $github;?></h1>
    </section>
</body>
</html>