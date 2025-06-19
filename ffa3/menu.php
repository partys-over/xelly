<!DOCTYPE html>
<html>
<head>
    <title>Random Button Click</title>
</head>
<body>

<form method="post" action="gameshow.php">
    <?php
    $typeliststellar = ['Water', 'Grass', 'Fire', 'Bug', 'Dark', 'Dragon', 'Electric', 'Fairy', 'Fighting', 'Flying', 'Ghost', 'Ground', 'Ice', 'Normal', 'Poison', 'Psychic', 'Rock', 'Steel', 'Stellar'];

    //include('gameshow.php');
    // Array of random strings
    //$buttonTexts = array("Button 1", "Button 2", "Button 3");

    // Randomly select a button text
    $randomButtonText1 = $typeliststellar[array_rand($typeliststellar)];
    $index1 = array_search($randomButtonText1, $typeliststellar);
    echo $index1;

// Check if the element exists in the list
    if ($index1 !== false) {
        // Remove the element from the array
        unset($typeliststellar[$index1]);
    }

    $randomButtonText2 = $typeliststellar[array_rand($typeliststellar)];
    $index12= array_search($randomButtonText2, $typeliststellar);
    // print_r($typeliststellar);

    if ($index2 !== false) {
        // Remove the element from the array
        unset($typeliststellar[$index2]);
    }
    ?>
    <!-- Button with random text -->
    <button type="submit" name="button" value="<?php echo $randomButtonText1; ?>"><?php echo $randomButtonText1; ?></button>
    <button type="submit" name="button" value="<?php echo $randomButtonText2; ?>"><?php echo $randomButtonText2; ?></button>
</form>

</body>
</html>