<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style-asso.css">
</head>
<body>
    <?php
        $verbruik = ["koelkast"=>1000, "vaatwasser"=>1200, "koffiezet"=>60, "wasmachine"=>1170, "stofzuiger"=>110];
        foreach($verbruik as $key => $value){
            echo "<p>" . $key . " = " . $value . " KwH</p>";
        }
        $totaal = 0;
        foreach($verbruik as $key => $value){
            $totaal += $value;
        }
        echo "<h1>Totaal</h2>";
        echo "<p>" . $totaal . " KwH</p>";
    ?>
</body>
</html>