<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for-loop</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php
        $pokemons = ["charizard", "Eevee", "Pikachu", "Jigglypuff", "Chimchar", "Squirtle"];
        $images = ["https://assets.pokemon.com/assets/cms2/img/pokedex/full/006.png",
                "https://assets.pokemon.com/assets/cms2/img/pokedex/full/133.png",
                "https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png",
                "https://assets.pokemon.com/assets/cms2/img/pokedex/full/039.png",
                "https://assets.pokemon.com/assets/cms2/img/pokedex/full/390.png",
                "https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png"];
        
        for ($i=0; $i < count($pokemons); $i++) { 
            echo "<h1>$pokemons[$i]</h1>";
            echo "<img src=\"$images[$i]\">";
        }
    ?>
</body>
</html>