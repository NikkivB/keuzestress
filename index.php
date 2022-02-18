<?php
if(isset($_POST['makeChoice'])) {
    $choices = array(
        $_POST['choice1'],
        $_POST['choice2']
    );

    $finalChoice = $choices[rand(0,1)];

    echo $finalChoice;
}