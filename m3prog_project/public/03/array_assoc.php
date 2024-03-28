<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $weer = ['vrijdag' => 11, 
            'zaterdag' => 9, 
            'zondag' => 9, 
            'maandag' => 12, 
            'dinsdag' => 11, 
            'woensdag' => 13, 
            'donderdag' => 13];
    print_r($weer);
    echo "<table>";
    echo "<tr><th>Dag</th><th>Graden</th></tr>";
    foreach ($weer as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>