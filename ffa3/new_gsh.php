<center><h1 style="color: #bb86fc; font-family: Copperplate">ffa program reborn</h1></center>
<?php

include('vars1.php');
include('vars2.php');
include('vars3.php');

$shmtest = get_defined_vars();

$puresets = array_splice($shmtest, 8); // idk wtf is going on here
shuffle($puresets);

/*
$var1 = rand(1, count($puresets)); $var2 = rand(1, count($puresets)); $var3 = rand(1, count($puresets)); $var4 = rand(1, count($puresets)); $var5 = rand(1, count($puresets)); $var6 = rand(1, count($puresets));
$var7 = rand(1, count($puresets)); $var8 = rand(1, count($puresets)); $var9 = rand(1, count($puresets)); $var10 = rand(1, count($puresets)); $var11 = rand(1, count($puresets)); $var12 = rand(1, count($puresets)); 
$var13 = rand(1, count($puresets));  $var14 = rand(1, count($puresets));  $var15 = rand(1, count($puresets)); 
*/
$typeliststellar = ['Water', 'Grass', 'Fire', 'Bug', 'Dark', 'Dragon', 'Electric', 'Fairy', 'Fighting', 'Flying', 'Ghost', 'Ground', 'Ice', 'Normal', 'Poison', 'Psychic', 'Rock', 'Steel', 'Stellar'];
//$typelistns = ['Water', 'Grass', 'Fire', 'Bug', 'Dark', 'Dragon', 'Electric', 'Fairy', 'Fighting', 'Flying', 'Ghost', 'Ground', 'Ice', 'Normal', 'Poison', 'Psychic', 'Rock', 'Steel']; // no stellar
$typelistns = ['Water', 'Grass', 'Fire', 'Bug', 'Dark', 'Dragon', 'Electric', 'Fairy', 'Fighting', 'Flying', 'Ghost', 'Ground', 'Ice', 'Normal', 'Poison', 'Psychic', 'Rock', 'Steel', 'Water', 'Grass', 'Fire', 'Bug', 'Dark', 'Dragon', 'Electric', 'Fairy', 'Fighting', 'Flying', 'Ghost', 'Ground', 'Ice', 'Normal', 'Poison', 'Psychic', 'Rock', 'Steel', 'Water', 'Grass', 'Fire', 'Bug', 'Dark', 'Dragon', 'Electric', 'Fairy', 'Fighting', 'Flying', 'Ghost', 'Ground', 'Ice', 'Normal', 'Poison', 'Psychic', 'Rock', 'Steel', 'Stellar'];

// gpt function to give a pkmn a tera type
function bussynomics($input_string, $random_strings) {
    // Check if the first character is an English letter
    if (!preg_match('/^[a-zA-Z]/', $input_string)) {
        // If not, remove it
        $input_string = substr($input_string, 1);
    }
    
    // Replace every instance of "&" with a random string from the array
    $random_string = $random_strings[array_rand($random_strings)];
    $output_string = str_replace("&", $random_string, $input_string);
    
    return ($output_string);
}
function bussynomics1($input_string, $random_strings) {
    // Check if the first character is an English letter
    if (!preg_match('/^[a-zA-Z]/', $input_string)) {
        // If not, remove it
        $input_string = substr($input_string, 1);
    }
    //echo "b00ssy";
    $liststring = explode("\n", $input_string);
    $partsitem = explode('@', $liststring[0]);
    $partsitem[1] = ' ?????';
    $liststring[0] = implode('@', $partsitem); 

    foreach ($liststring as $evkey => $value) {
        if (strpos($value, 'EVs: ') !== false) {
            $liststring[$evkey] = "EVs: ?????";
            //echo $evkey;
        }
        elseif (strpos($value, 'Nature') !== false) {
            $liststring[$evkey] = "????? Nature";
            //echo $evkey;
        }
        elseif (strpos($value, 'Ability:') !== false) {
            //$lengthof = liststring[$evkey];
            $lengthof = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof - 1);
            //echo $evkey;
        }
        elseif (strpos($value, 'IVs:') !== false) { // random annoying newlines from unchanged text
            //$lengthof = liststring[$evkey];
            //$lengthof2 = strlen($value);
            unset($liststring[$evkey]);
            // $liststring[$evkey] = substr($value, 0, $lengthof2 - 1);
            //echo $evkey;
        } 
       elseif (strpos($value, 'Shiny:') !== false) {
            //$lengthof = liststring[$evkey];
            $lengthof69 = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof69 - 1);
            //echo $evkey;
        }           
        elseif (strpos($value, 'Happiness:') !== false) {
            //$lengthof = liststring[$evkey];
            $lengthof3 = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof3 - 1);
            //echo $evkey;
        }                      
        elseif (strpos($value, 'Tera Type:') !== false) {
            //$lengthof = liststring[$evkey];
            $lengthof2 = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof2 - 1);
            //echo $evkey;
        }             
        elseif (strpos($value, '-') !== false and strpos($value, '@') == false) {
            
            //echo $evkey;
            if (strpos($value, "Rapid Spin") !== false ||
            strpos($value, "Defog") !== false ||
            strpos($value, "Tidy Up") !== false ||
            strpos($value, "Magic Bounce") !== false ||
            strpos($value, "Court Change") !== false) {
                $lengthof55 = strlen($value);
                $liststring[$evkey] = substr($value, 0, $lengthof55 - 1);
            }
            else {
                $liststring[$evkey] = "- ?????";
            }
        }
    }

    // Replace every instance of "&" with a random string from the array
    $imploded = implode("\n",$liststring);
    $random_string = $random_strings[array_rand($random_strings)];
    $output_string = (str_replace('&', $random_string, $imploded));
    //$output_string = str_replace("\n", '', $imploded);// formerly $input_string
    //echo nl2br($imploded);
    // print_r($liststring);
    return (nl2br($output_string));
}

$testvar1 = "Zapdos-Galar @ Choice Band  
Ability: Defiant  
Tera Type: &  
EVs: 8 HP / 248 Atk / 56 SpD / 196 Spe  
Adamant Nature  
- Brave Bird  
- Close Combat  
- Knock Off  
- Thunderous Kick";
// echo (bussynomics1($testvar1, $typelistns) . "<br />" . "<br />"); // debug

function bussynomics2($input_string, $random_strings) {
    // Check if the first character is an English letter
    if (!preg_match('/^[a-zA-Z]/', $input_string)) {
        // If not, remove it
        $input_string = substr($input_string, 1);
    }
    //echo "b00ssy";
    $liststring = explode("\n", $input_string);
    $partsitem = explode('@', $liststring[0]);
    $partsitem[0] = '????? ';
    $liststring[0] =  substr(implode('@', $partsitem), 0, -1);
    $stinkbutt = 0;
    foreach ($liststring as $evkey => $value) {
        if (strpos($value, 'EVs: ') !== false) {
            $liststring[$evkey] = "EVs: ?????";
            //echo $evkey;
        }
        elseif (strpos($value, 'Nature') !== false) {
            $liststring[$evkey] = "????? Nature";
            //echo $evkey;
        }
        elseif (strpos($value, 'Ability:') !== false) {
            $liststring[$evkey] = "Ability: ?????";
            //echo $evkey;
        }
        elseif (strpos($value, 'IVs:') !== false) { // random annoying newlines from unchanged text
            //$lengthof = liststring[$evkey];
            $lengthof2 = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof2 - 1);;
            //echo $evkey;
        } 
       elseif (strpos($value, 'Shiny:') !== false) {
            //$lengthof = liststring[$evkey];
            $lengthof69 = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof69 - 1);
            //echo $evkey;
        }     
       elseif (strpos($value, 'Level:') !== false) {
            //$lengthof = liststring[$evkey];
            $lengthof60 = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof60 - 1);
            //echo $evkey;
        }                       
        elseif (strpos($value, 'Happiness:') !== false) {
            //$lengthof = liststring[$evkey];
            $lengthof3 = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof3 - 1);
            //echo $evkey;
        }                      
        elseif (strpos($value, 'Tera Type:') !== false) {
            //$lengthof = liststring[$evkey];
            $lengthof2 = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof2 - 1);
            //echo $evkey;
        }             
        elseif (strpos($value, '-') !== false and strpos($value, '@') == false) {
            if ($stinkbutt < 3) {
                // If so, increase $stinkbutt by 1
                $lengthof420 = strlen($value);
                $liststring[$evkey] = substr($value, 0, $lengthof420 - 1);
                $stinkbutt++;
            }
            else {
                if (strpos($value, "Rapid Spin") !== false ||
                strpos($value, "Defog") !== false ||
                strpos($value, "Tidy Up") !== false ||
                strpos($value, "Magic Bounce") !== false ||
                strpos($value, "Court Change") !== false) {
                    $lengthof55 = strlen($value);
                    $liststring[$evkey] = substr($value, 0, $lengthof55 - 1);
                }
                else {
                    $liststring[$evkey] = "- ?????";
                }
            //echo $evkey;
            }
        }
    }

    // Replace every instance of "&" with a random string from the array
    $imploded = implode("\n",$liststring);
    $random_string = $random_strings[array_rand($random_strings)];
    $output_string = (str_replace('&', $random_string, $imploded));
    //$output_string = str_replace("\n", '', $imploded);// formerly $input_string
    //echo nl2br($imploded);
    // print_r($liststring);
    return (nl2br($output_string));
}

function bussynomics3($input_string, $random_strings) {
    // Check if the first character is an English letter
    if (!preg_match('/^[a-zA-Z]/', $input_string)) {
        // If not, remove it
        $input_string = substr($input_string, 1);
    }
    //echo "b00ssy";
    $liststring = explode("\n", $input_string);
    $stinkbutt2 = 4;
    $yourfate = rand(1, 3);
    //echo $yourfate;
    if ($yourfate === 1) {
        $partsitem = explode('@', $liststring[0]);
        $partsitem[1] = ' ?????';
        $liststring[0] = implode('@', $partsitem); 
        //echo 'hi red!';
    }
    else {
        $partsitem = explode('@', $liststring[0]);
        $partsitem[0] = '????? ';
        $liststring[0] =  substr(implode('@', $partsitem), 0, -1);
        
    }

    foreach ($liststring as $evkey => $value) {
        if (strpos($value, 'EVs: ') !== false) {
            $lengthof690 = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof690 - 1);
            //echo $evkey;
        }
        elseif (strpos($value, 'Nature') !== false) {
            $liststring[$evkey] = "????? Nature";
            //echo $evkey;
        }
        elseif (strpos($value, 'Ability:') !== false) {
            $liststring[$evkey] = "Ability: ?????";
            //echo $evkey;
        }
        elseif (strpos($value, 'IVs:') !== false) { // random annoying newlines from unchanged text
            //$lengthof = liststring[$evkey];
            $lengthof2 = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof2 - 1);;
            //echo $evkey;
        } 
       elseif (strpos($value, 'Shiny:') !== false) {
            //$lengthof = liststring[$evkey];
            $lengthof69 = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof69 - 1);
            //echo $evkey;
        }     
       elseif (strpos($value, 'Level:') !== false) {
            //$lengthof = liststring[$evkey];
            $lengthof60 = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof60 - 1);
            //echo $evkey;
        }                       
        elseif (strpos($value, 'Happiness:') !== false) {
            //$lengthof = liststring[$evkey];
            $lengthof3 = strlen($value);
            $liststring[$evkey] = substr($value, 0, $lengthof3 - 1);
            //echo $evkey;
        }                      
        elseif (strpos($value, 'Tera Type:') !== false) {
            //$lengthof = liststring[$evkey];
            //$lengthof2 = strlen($value);
            $liststring[$evkey] = 'Tera Type: ?????';
            //echo $evkey;
        }             
        elseif (strpos($value, '-') !== false and strpos($value, '@') == false) {
            $stinkbutt2--;
            if ($stinkbutt2 < 1) {
                // If so, increase $stinkbutt by 1
                $lengthof420 = strlen($value);
                $liststring[$evkey] = substr($value, 0, $lengthof420 - 1);

            }
            else {
                $liststring[$evkey] = "- ?????";
            }
            //echo $evkey;
        }
    }

    // Replace every instance of "&" with a random string from the array
    $imploded = implode("\n",$liststring);
    $random_string = $random_strings[array_rand($random_strings)];
    $output_string = (str_replace('&', $random_string, $imploded));
    //$output_string = str_replace("\n", '', $imploded);// formerly $input_string
    //echo nl2br($imploded);
    // print_r($liststring);
    return (nl2br($output_string));
}



// Example usage:
$input_string = "Some & example & string";
$random_strings = ["random1", "random2", "random3"];

// $output_string = bussynomics($input_string, $random_strings);
// echo $output_string;




// Shuffle the list

// Define the substrings to search for
global $substrings;
$substrings = ["Rapid Spin", "Defog", "Tidy Up", "Magic Bounce", "Court Change"];

// Initialize the variable to store the first instance
$firstInstance = null;

// Loop through the shuffled list to find the first instance of the substrings
foreach ($puresets as $move) {
    foreach ($substrings as $substring) {
        if (strpos($move, $substring) !== false) {
            $var15 = $move;
            break 2; // Break both loops
        }
    }
}


$var1 = nl2br($puresets[array_rand($puresets)]); $var2 = nl2br($puresets[array_rand($puresets)]); $var3 = nl2br($puresets[array_rand($puresets)]); $var4 = nl2br($puresets[array_rand($puresets)]); $var5 = nl2br($puresets[array_rand($puresets)]);
$var6 = nl2br($puresets[array_rand($puresets)]); $var7 = nl2br($puresets[array_rand($puresets)]); $var8 = nl2br($puresets[array_rand($puresets)]); $var9 = nl2br($puresets[array_rand($puresets)]); $var10 = nl2br($puresets[array_rand($puresets)]);
$var11 = nl2br($puresets[array_rand($puresets)]); $var12 = ($puresets[array_rand($puresets)]); $var13 = nl2br($puresets[array_rand($puresets)]); $var14 = nl2br($puresets[array_rand($puresets)]); 

// old codde
// $allmuhvars = [$var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10, $var11, $var11, $var12, $var13, $var14, $var15]; // not efficient code kek idc
// shuffle($allmuhvars); // so the hazard removal is at a different place every time

// gpt
$randomKeys = array_rand($puresets, 14);

// Initialize an array to store the randomly selected variables
$allmuhvars = array();
array_push($allmuhvars, nl2br($var15));

// Loop through the random keys and retrieve the corresponding variables
foreach ($randomKeys as $key) {
    $allmuhvars[] = nl2br($puresets[$key]);
}
shuffle($allmuhvars);

// Output the first instance
// echo nl2br ("Removal: " . $var15 . "<br />");
$buildaroundmon =  bussynomics($puresets[0], $typelistns);
echo nl2br ('<center><h3 style="display: inline">Build around:</h3><p>' . $buildaroundmon . $var12 . "</font></center>");
$var12post = ($puresets[array_rand($puresets)]);
$row1b = [bussynomics($allmuhvars[0], $typelistns), bussynomics($allmuhvars[1], $typelistns), bussynomics($allmuhvars[2], $typelistns)];
$row2b = [bussynomics($allmuhvars[3], $typelistns), bussynomics($allmuhvars[4], $typelistns), bussynomics($allmuhvars[5], $typelistns)];
$row3b = [bussynomics($allmuhvars[6], $typelistns), bussynomics($allmuhvars[7], $typelistns), bussynomics($allmuhvars[8], $typelistns)];


echo "<script>";
echo "var row1be = " . json_encode($row1b) . ";";
echo "var row2be = " . json_encode($row2b) . ";";
echo "var row3be = " . json_encode($row3b) . ";";
echo "var row4be = " . json_encode($row4b) . ";";
echo "var row5be = " . json_encode($row5b) . ";";
echo "</script>";


// $buttonTexts = array(nl2br($puresets[1]), nl2br($puresets[2]), nl2br($puresets[3]));

/*
    <style>
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .button {
            padding: 10px 20px;
            margin: 5px;
            min-width: 100px;
            text-align: center;
            box-sizing: border-box;
            height: 200px;
            width: 300px;

*/

// gpt zone
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FFA Gameshow</title>
    <style>
        body {
        background-color: Canvas;
        color: CanvasText;
        color-scheme: light dark;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
       .button-container2 {
            // display: flex;
            justify-content: center;
            margin-top: 20px;
            display: none;
        }
       .button-container3 {
            // display: flex;
            justify-content: center;
            margin-top: 20px;
            display: none;
        }
       .button-container4 {
            // display: flex;
            justify-content: center;
            margin-top: 20px;
            display: none;
        }
       .button-container5 {
            // display: flex;
            justify-content: center;
            margin-top: 20px;
            display: none;
        }
       .button-container6 {
            // display: flex;
            justify-content: center;
            margin-top: 20px;
            display: none;
        }
        .button {
            padding: 10px 20px;
            margin: 5px;
            min-width: 100px;
            text-align: center;
            box-sizing: border-box;
            height: 200px;
            width: 300px;
            // font-family: Monaco;
        }

        #textarea-container {
            margin-top: 20px;
            text-align: center;
        }

        #selected-text {
            width: 325px;
            height: 200px;
            // text-align: justify;
            // font-family: Monaco;
            
        }
        .large-button {
            display: inline-block;
            padding: 20px 40px; /* Adjust padding as needed for size */
            font-size: 24px; /* Adjust font size as needed */
            background-color: #4CAF50; /* Green */
            color: white;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border: none;
            border-radius: 10px; /* Adjust border radius as needed for rounded corners */
            transition: background-color 0.3s ease;
        }
        p {
            // font-family: Monaco;
        }
        a {
            // font-family: Monaco;
        }
        /* Hover effect */
        .large-button:hover {
        background-color: #45a049; /* Darker green */
        }
    </style>
</head>
<body>
<div class="button-container" id="row1">
    <!-- Create buttons with pre-established PHP variables -->
    <button class="button" onclick="addToSelectedText(this, 0)"><?php echo bussynomics1($allmuhvars[0], $typelistns); ?></button>
    <button class="button" onclick="addToSelectedText(this, 1)"><?php echo bussynomics2($allmuhvars[1], $typelistns); ?></button>
    <button class="button" onclick="addToSelectedText(this, 2)"><?php echo bussynomics3($allmuhvars[2], $typelistns); ?></button>
</div>
<div class="button-container2" id="row2">
    <button class="button" onclick="add2(this, 0)"><?php echo bussynomics1($allmuhvars[3], $typelistns); ?></button>
    <button class="button" onclick="add2(this, 1)"><?php echo bussynomics2($allmuhvars[4], $typelistns); ?></button>
    <button class="button" onclick="add2(this, 2)"><?php echo bussynomics3($allmuhvars[5], $typelistns); ?></button>
</div>`
<div class="button-container3" id="row3">
    <!-- Create buttons with pre-established PHP variables -->
    <button class="button" onclick="add3(this, 0)"><?php echo bussynomics1($allmuhvars[6], $typelistns); ?></button>
    <button class="button" onclick="add3(this, 1)"><?php echo bussynomics2($allmuhvars[7], $typelistns); ?></button>
    <button class="button" onclick="add3(this, 2)"><?php echo bussynomics3($allmuhvars[8], $typelistns); ?></button>
</div>
<div class="button-container4" id="row4">
    <!-- Create buttons with pre-established PHP variables -->
    <button class="button" onclick="add4(this, 0)"><?php echo bussynomics1($allmuhvars[9], $typelistns); ?></button>
    <button class="button" onclick="add4(this, 1)"><?php echo bussynomics2($allmuhvars[10], $typelistns); ?></button>
    <button class="button" onclick="add4(this, 2)"><?php echo bussynomics3($allmuhvars[11], $typelistns); ?></button>
</div>
<div class="button-container5" id="row5">
    <button class="button" onclick="add5(this, 0)"><?php echo bussynomics1($allmuhvars[12], $typelistns); ?></button>
    <button class="button" onclick="add5(this, 1)"><?php echo bussynomics2($allmuhvars[13], $typelistns); ?></button>
    <button class="button" onclick="add5(this, 2)"><?php echo bussynomics3($allmuhvars[14], $typelistns); ?></button>
</div>

<div id="textarea-container">
    <h3>Chosen Team:</h3>
    <textarea id="selected-text" readonly><?php echo ($buildaroundmon . "\n"); ?></textarea>
    <br />
    <button onclick="copyText69()">Copy Team</button>
    <button onclick="copyText()">Challenge Code</button>



<!-- Hidden textarea -->
<textarea id="textToCopy" style="position: absolute; left: -9999px;"></textarea>
<br /><br />
<button class="large-button"><a href="http://xelly.ezyro.com/ffa3/new_gsh.php" style="color: inherit; text-decoration: inherit;">New Team</a></button>


<script>

    function copyText69() {
        var textarea = document.getElementById("selected-text");
        textarea.select();
        document.execCommand("copy");
        alert("Text copied to clipboard!");
        }
    function copyText() {
    const text = "/challenge gen9freeforall@@@!Sleep Moves Clause,Sleep Clause Mod,+Uber, +ND Uber, !Obtainable, +Annihilape, +Arceus, +Calyrex-Ice, +Calyrex-Shadow, +Chi-Yu, +Darkrai, +Dialga, +Dialga-Origin, +Eternatus, +Flutter Mane, +Giratina, +Giratina-Origin, +Groudon, +Hoopa-Unbound, +Iron Bundle, +Koraidon, +Kyogre, +Landorus-Base, +Lugia, +Magearna, +Mewtwo, +Miraidon, +Palafin, +Palkia, +Palkia-Origin, +Rayquaza, +Spectrier, +Shaymin-Sky, +Ursaluna, +Urshifu-Base, +Zacian, +Zacian-Crowned, +Moody, +Shadow Tag, +Toxic Debris, +Acupressure, +Aromatic Mist, +Baton Pass, +Court Change, +Final Gambit, +Flatter, +Follow Me, +Heal Pulse, +Last Respects, +Poison Fang, +Rage Powder, +Spicy Extract, +Swagger, +Toxic, +Toxic Spikes,+Toxic Chain,+Double Team,+Ursaluna-Bloodmoon,+Urshifu-Rapid-Strike,+Terapagos,!Species Clause";
    const textarea = document.getElementById("textToCopy");
    textarea.value = text;
    textarea.select();
    document.execCommand("copy");
    alert("Text copied to clipboard!");
    }
    function addToSelectedText(button, number) {
        // Get the text of the clicked button
        //var buttonText = button.innerText;
        var buttonText = row1be[number].replace(/<br \/>/g, "");

        // Get the current value of the textarea
        var currentText = document.getElementById('selected-text').value;

        // Append the new button text to the textarea with a newline
        var newText = currentText + buttonText + '\n';

        // Set the updated text to the textarea
        document.getElementById('selected-text').value = newText;

        // Hide all buttons by setting display:none in CSS
        var buttons = document.querySelectorAll('.button');
        buttons.forEach(function (button) {
            //button.style.display = 'none';
        
            document.getElementById('row1').style.display = "none";
            document.getElementById('row2').style.display = "flex";
            /// row1.remove();
            // Insert button 2 before button 1's original position
            // row2.insertAdjacentElement("beforebegin", button1);
            // var hiddenDiv = document.getElementByClassName("button-container2");
            // hiddenDiv.style.display = "block";

        });
    }
    function add2(button, number) {
        // Get the text of the clicked button
        // var buttonText = button.innerText;
        var buttonText = row2be[number].replace(/<br \/>/g, "");
        

        // Get the current value of the textarea
        var currentText = document.getElementById('selected-text').value;

        // Append the new button text to the textarea with a newline
        var newText = currentText + buttonText + '\n';

        // Set the updated text to the textarea
        document.getElementById('selected-text').value = newText;

        // Hide all buttons by setting display:none in CSS
        var buttons = document.querySelectorAll('.button');
        buttons.forEach(function (button) {
            //button.style.display = 'none';
        
            document.getElementById('row2').style.display = "none";
            document.getElementById('row3').style.display = "flex";
            

        });
    }
    function add3(button, number) {
        // Get the text of the clicked button
        var buttonText = row3be[number].replace(/<br \/>/g, "");

        // Get the current value of the textarea
        var currentText = document.getElementById('selected-text').value;

        // Append the new button text to the textarea with a newline
        var newText = currentText + buttonText + '\n';

        // Set the updated text to the textarea
        document.getElementById('selected-text').value = newText;

        // Hide all buttons by setting display:none in CSS
        var buttons = document.querySelectorAll('.button');
        buttons.forEach(function (button) {
            //button.style.display = 'none';
        
            document.getElementById('row3').style.display = "none";
            

        });
    }
    function add4(button, number) {
        // Get the text of the clicked button
        var buttonText = row4be[number].replace(/<br \/>/g, "");

        // Get the current value of the textarea
        var currentText = document.getElementById('selected-text').value;

        // Append the new button text to the textarea with a newline
        var newText = currentText + buttonText + '\n';

        // Set the updated text to the textarea
        document.getElementById('selected-text').value = newText;

        // Hide all buttons by setting display:none in CSS
        var buttons = document.querySelectorAll('.button');
        buttons.forEach(function (button) {
            //button.style.display = 'none';
        
            document.getElementById('row4').style.display = "none";
            document.getElementById('row5').style.display = "flex";
            

        });
    }  
    function add5(button, number) {
        // Get the text of the clicked button
        var buttonText = row5be[number].replace(/<br \/>/g, "");

        // Get the current value of the textarea
        var currentText = document.getElementById('selected-text').value;

        // Append the new button text to the textarea with a newline
        var newText = currentText + buttonText + '\n';

        // Set the updated text to the textarea
        document.getElementById('selected-text').value = newText;

        // Hide all buttons by setting display:none in CSS
        var buttons = document.querySelectorAll('.button');
        buttons.forEach(function (button) {
            //button.style.display = 'none';
        
            document.getElementById('row5').style.display = "none";
            

        });
    }      
</script>
</body>
</html>