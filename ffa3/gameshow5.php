<!DOCTYPE html>
<html>
<head>
    <title>Button Click</title>
    <script>
        function handleClick(buttonText) {
            // Hide all buttons
            var buttons = document.getElementsByTagName("button");
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].style.display = "none";
            }
            // Show the clicked button's text
            document.getElementById("result").innerHTML = "You clicked: " + buttonText;
        }
    </script>
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            // Handle button click
            echo "<div id='result'>You clicked: " . $_POST['buttonText'] . "</div>";
        } else {
            // Display buttons
            echo "<button onclick=\"handleClick(this.textContent)\" name='buttonText' value='Button 1'>Button 1</button>";
            echo "<button onclick=\"handleClick(this.textContent)\" name='buttonText' value='Button 2'>Button 2</button>";
            echo "<button onclick=\"handleClick(this.textContent)\" name='buttonText' value='Button 3'>Button 3</button>";
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['button'])) {
            $buttonText = $_POST['buttonText'];
           echo "You clicked: $buttonText";
        }
    }
    ?>
</body>
</html>
