<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $namen = ["Isa Smith", "Jemo Eder", "James Valdez", "Pim Bakker", "Mitch Smith"];
    echo count($namen)."<br>";
    sort($namen);
    print_r($namen);
    echo "<br>";
    echo array_pop($namen)."<br>";
    array_push($namen, "Sander Walker");
    $namen[] = "Chiara Sayeah";
    print_r($namen);
    echo "<br>";
    $namen_tekst = implode('<br>', $namen);
    echo "$namen_tekst<br>";
    $explode = explode('<br>', $namen_tekst);
    print_r($explode);
    ?>
</body>
</html>