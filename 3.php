<?php
session_start();
if(isset($_SESSION["x1"]))
{
    $_SESSION['x2'] = $_POST['answer1'];

    $i = 0;

    foreach($_SESSION as $answer){
        if($answer=='true'){
            $i++;
        }
    }

    echo "<b>Number of correct answers: ", $i, "</b>", "<br>\n", "<br>\n", "Your answer to 1 test: ", $_SESSION["x1"], "<br>\n", "Your answer to 2 test: ", $_SESSION["x2"];
    session_destroy();
}

?>
