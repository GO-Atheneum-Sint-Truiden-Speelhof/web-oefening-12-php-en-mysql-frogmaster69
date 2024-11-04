<div class="jumbotron">

<h1 class="display-4">Je foto insturen</h1>

</div>

<div class="row">

<div class="col-md tegel">

<p>Bedankt voor je deelname! Dit is de informatie die je ons hebt
doorgestuurd:</p>

<?php


session_start();

echo '<p>Naam: '.$_SESSION['naam'].'<br>

Straat: '.$_SESSION['straat'].'<br>
Commentaar: '.$_SESSION['commentaar'].'</p>';

?>
<p><form action="begin.php?page=upload" method="post" enctype="multipart/

formdata"></p>

<p><input type="file" name="bestand"></p>

<p class="knoppen"><input type="submit" value="Upload" class="btn-outline-
dark
btn-lg"></p>

</form>
</div>

</div>