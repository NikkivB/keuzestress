<?php
if(isset($_POST['setAmount'])) {
    echo "<form action='/index.php' name='makeChoice'>";

    for ($i = 0; $i <= $_POST['amount']; $i++) {

        echo "<label>Getal 1 : </label>";
        echo "<input type='number' name='number ". $i . "'/>";
        echo "<br>";
    }
    echo "<button type='submit' name='makeChoice'>";
    echo "</form>";
}