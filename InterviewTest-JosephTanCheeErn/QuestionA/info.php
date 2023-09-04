<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];

    //Check is the username match the requirement or not
    if ($username === 'abc') {
        echo 'Verified'; // Username is Correct
    } else {
        echo '<p style="color: red;">Error</p>'; // Username is incorrect
    }
}
?>

