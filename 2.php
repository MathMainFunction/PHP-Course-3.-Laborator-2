<form action="3.php" method='post'><b>What was the Cheburashka supposed to bring?</b><br>
<p><b>[>] <a href="https://www.youtube.com/watch?v=yb92wf-LffA">Link to answer video</a></b></p>
<input name="answer1" type="radio" value="false">food<br>
<input name="answer1" type="radio" value="false">a blanket<br>
<input name="answer1" type="radio" value="true">towel<br><br>
<input type='submit' value='next page'><br>
    <?php
    session_start ();
    $_SESSION['x1'] = $_POST['answer'];
    ?>
</form>