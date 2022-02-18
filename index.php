<?php
if(isset($_POST['makeChoice'])) {
    $choices = array(
        $_POST['choice1'],
        $_POST['choice2']
    );

    makeAChoice($choices);
    echo "<br> <a href='/index.html\'>Ga terug</a>";
}

function makeAChoice($keuzes) {
    $finalChoice = $keuzes[rand(0,1)];

    echo "<h1>Uw keuze is: " . $finalChoice . "</h1>";
}