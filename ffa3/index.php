<center>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FFA Team Generator</title>
</head>
<?php

include('vars1.php');
include('vars2.php');
include('vars3.php');
//include('vars2.php');

$shmtest = get_defined_vars();

$puresets = array_splice($shmtest, 8); // idk wtf is going on here
//echo 'BUSSY!';
//print_r($puresets);

$typelist = ['Water', 'Grass', 'Fire', 'Bug', 'Dark', 'Dragon', 'Electric', 'Fairy', 'Fighting', 'Flying', 'Ghost', 'Ground', 'Ice', 'Normal', 'Poison', 'Psychic', 'Rock', 'Steel'];
# $typelist = ['Water', 'Grass', 'Fire', 'Bug', 'Dark', 'Dragon', 'Electric', 'Fairy', 'Fighting', 'Flying', 'Ghost', 'Ground', 'Ice', 'Normal', 'Poison', 'Psychic', 'Rock', 'Steel', 'Stellar'];

$tera1type = rand(0, 17); $tera2type = rand(0, 17); $tera3type = rand(0, 17); $tera4type = rand(0, 17); $tera5type = rand(0, 17); $tera6type = rand(0, 17); 
// echo $typelist[$tera1type];

shuffle($puresets);
$output = array_slice($puresets, 0, 6);
// echo nl2br ($output[0]);

global $removal;
$removal = '';



/* Check if any string in the list contains the specified strings /*
if (containsSpecificStrings($stringList)) {
    echo "The list contains a string with 'a,' 'b,' 'c,' 'd,' or 'e.'";
} else {
    echo "No string in the list contains 'a,' 'b,' 'c,' 'd,' or 'e.'";
}*/



foreach ($puresets as $string) { // CHATGPT CODE, FINDS FIRST INSTANCE IN RANDOMIZED LIST OF HAZARD REMOVAL
if (strpos($string, 'Defog') !== false || strpos($string, 'Rapid Spin') !== false || strpos($string, 'Magic Bounce') !== false || strpos($string, 'Tidy Up') !== false || strpos($string, 'Court Change') !== false) {
    // echo "First string containing 'a' or 'b': " . $string . "<br /><br /><br />";
    $removal = $string;
    break; // Break the loop once a matching string is found
    }
}

foreach ($output as $string2) {
    if (strpos($string2, 'Rapid Spin') !== false || strpos($string2, 'Defog') !== false || strpos($string2, 'Magic Bounce') !== false || strpos($string2, 'Tidy Up') !== false || strpos($string2, 'Court Change') !== false) {
        // HAS REMOVAL
        $completeteam = (
        str_replace('&', $typelist[$tera1type], $output[0]) . "\n" .  
        str_replace('&', $typelist[$tera2type], $output[1]) . "\n" .
        str_replace('&', $typelist[$tera3type], $output[2]) . "\n" .
        str_replace('&', $typelist[$tera4type], $output[3]) . "\n" .
        str_replace('&', $typelist[$tera5type], $output[4]) . "\n" .
        str_replace('&', $typelist[$tera6type], $output[5])
        //. $removal
        ) ; ?>
<textarea id="myTextarea" rows="10" cols="50"><?php echo ($completeteam); ?></textarea><br />
<button onclick="copyText()">Copy Text</button>

<!-- Hidden textarea -->
<textarea id="textToCopy" style="position: absolute; left: -9999px;"></textarea>

<script>
function copyText() {
  const text = "/challenge gen9freeforall@@@!Sleep Moves Clause,Sleep Clause Mod,+Uber, +ND Uber, !Obtainable, +Annihilape, +Arceus, +Calyrex-Ice, +Calyrex-Shadow, +Chi-Yu, +Darkrai, +Dialga, +Dialga-Origin, +Eternatus, +Flutter Mane, +Giratina, +Giratina-Origin, +Groudon, +Hoopa-Unbound, +Iron Bundle, +Koraidon, +Kyogre, +Landorus-Base, +Magearna, +Mewtwo, +Miraidon, +Palafin, +Palkia, +Palkia-Origin, +Rayquaza, +Spectrier, +Shaymin-Sky, +Ursaluna, +Urshifu-Base, +Zacian, +Zacian-Crowned, +Moody, +Shadow Tag, +Toxic Debris, +Acupressure, +Aromatic Mist, +Baton Pass, +Court Change, +Final Gambit, +Flatter, +Follow Me, +Heal Pulse, +Last Respects, +Poison Fang, +Rage Powder, +Spicy Extract, +Swagger, +Toxic, +Toxic Spikes,+Toxic Chain,+Double Team,+Ursaluna-Bloodmoon,+Terapagos";
  const textarea = document.getElementById("textToCopy");
  textarea.value = text;
  textarea.select();
  document.execCommand("copy");
  alert("Text copied to clipboard!");
}
</script>
<?php
        break; 
    }
    else {
        $randomNumber = rand(1, 3);

        // Check if the number is 1 or 2
        if ($randomNumber === 100 || $randomNumber === 200) {
            // echo "Hello";
            $completeteam = (
            str_replace('&', $typelist[$tera1type], $output[0]) . "\n" .  
            str_replace('&', $typelist[$tera2type], $output[1]) . "\n" .
            str_replace('&', $typelist[$tera3type], $output[2]) . "\n" .
            str_replace('&', $typelist[$tera4type], $output[3]) . "\n" .
            str_replace('&', $typelist[$tera5type], $output[4]) . "\n"
            . $removal
            );
            ?>
<textarea id="myTextarea" rows="10" cols="50"><?php echo ($completeteam); ?></textarea><br />
<button onclick="copyToClipboard()">Copy Team</button>

<script>
    function copyToClipboard() {
        // Get the text from the textarea
        var textToCopy = document.getElementById("myTextarea").value;

        // Create a temporary textarea element
        var tempTextarea = document.createElement("textarea");
        tempTextarea.value = textToCopy;

        // Append the textarea element to the body
        document.body.appendChild(tempTextarea);

        // Select the text inside the textarea element
        tempTextarea.select();
        tempTextarea.setSelectionRange(0, 99999); /* For mobile devices */

        // Copy the text to the clipboard
        document.execCommand("copy");

        // Remove the temporary textarea element
        document.body.removeChild(tempTextarea);

        // Optionally, provide user feedback
        alert("Text copied to clipboard:\n" + textToCopy);
    }
</script>

        <?php
            break; 
        }
        else {
            $completeteam2 = (
                str_replace('&', $typelist[$tera1type], $output[0]) . "\n" .  
                str_replace('&', $typelist[$tera2type], $output[1]) . "\n" .
                str_replace('&', $typelist[$tera3type], $output[2]) . "\n" .
                str_replace('&', $typelist[$tera4type], $output[3]) . "\n" .
                str_replace('&', $typelist[$tera5type], $output[4]) . "\n" .
                str_replace('&', $typelist[$tera6type], $output[5])
            );
            ?>
<textarea id="myTextarea" rows="10" cols="50"><?php echo ($completeteam2); ?></textarea><br />
<button onclick="copyToClipboard()">Copy Team</button>

<script>
    function copyToClipboard() {
        // Get the text from the textarea
        var textToCopy = document.getElementById("myTextarea").value;

        // Create a temporary textarea element
        var tempTextarea = document.createElement("textarea");
        tempTextarea.value = textToCopy;

        // Append the textarea element to the body
        document.body.appendChild(tempTextarea);

        // Select the text inside the textarea element
        tempTextarea.select();
        tempTextarea.setSelectionRange(0, 99999); /* For mobile devices */

        // Copy the text to the clipboard
        document.execCommand("copy");

        // Remove the temporary textarea element
        document.body.removeChild(tempTextarea);

        // Optionally, provide user feedback
        //alert("Text copied to clipboard:\n" + textToCopy);
    }
</script>
            <?php
            break;
        }
    }
}
?>
<button onclick="copyTextToClipboard()">Challenge Code</button>
<p id="textToCopy" style="font-size: 0;">/challenge gen9freeforall@@@+Uber, +ND Uber, !Obtainable, +Annihilape, +Arceus, +Calyrex-Ice, +Calyrex-Shadow, +Chi-Yu, +Darkrai, +Dialga, +Dialga-Origin, +Eternatus, +Flutter Mane, +Giratina, +Giratina-Origin, +Groudon, +Hoopa-Unbound, +Iron Bundle, +Koraidon, +Kyogre, +Landorus-Base, +Magearna, +Mewtwo, +Miraidon, +Palafin, +Palkia, +Palkia-Origin, +Rayquaza, +Spectrier, +Shaymin-Sky, +Ursaluna, +Urshifu-Base, +Zacian, +Zacian-Crowned, +Moody, +Shadow Tag, +Toxic Debris, +Acupressure, +Aromatic Mist, +Baton Pass, +Court Change, +Final Gambit, +Flatter, +Follow Me, +Heal Pulse, +Last Respects, +Poison Fang, +Rage Powder, +Spicy Extract, +Swagger, +Toxic, +Toxic Spikes,+Toxic Chain,+Double Team,+Ursaluna-Bloodmoon</p>

<script>
  function copyTextToClipboard() {
    // Get the text content
    var textToCopy = document.getElementById("textToCopy").innerText;

    // Create a temporary textarea element
    var textarea = document.createElement("textarea");
    textarea.value = textToCopy;

    // Append the textarea to the body
    document.body.appendChild(textarea);

    // Select the text in the textarea
    textarea.select();
    textarea.setSelectionRange(0, 99999); // For mobile devices

    // Copy the selected text to the clipboard
    document.execCommand("copy");

    // Remove the temporary textarea
    document.body.removeChild(textarea);

    // Alert or provide feedback to the user
    alert("Text copied to clipboard:\n" + textToCopy);
  }
</script>
<?php

// echo 'a->';


?>
</center>