<!doctype html>
<html lang="nl">
<?php include('includes/head.php'); ?>

<body>
    <div class="jumbotron">
        <h1 class="display-4 text-center">Bevestig je gegevens</h1>
    </div>
    
    <div class="container" style="max-width: 600px; margin: 0 auto;">
    
    <?php



  $naam = $_POST['naam'] ?? '';
  $straat_nr = $_POST['straat_nr'] ?? '';
  $postcode = $_POST['postcode'] ?? '';
  $gemeente = $_POST['gemeente'] ?? '';
  $email = $_POST['email'] ?? '';
  $geboortedatum = $_POST['geboortedatum'] ?? '';
  $titel_foto = $_POST['titel_foto'] ?? '';
  $camera = $_POST['camera'] ?? '';
  $lens = $_POST['lens'] ?? '';
  $telefoon = $_POST['telefoon'] ?? '';
  $beschrijving = $_POST['beschrijving'] ?? '';

  $ontvanger = 'frog@localhost';  
  $onderwerp = 'Foto Inzending';       
  $bericht = "Naam: $naam\nStraat: $straat_nr\nPostcode: $postcode\nGemeente: $gemeente\nE-mail: $email\nGeboortedatum: $geboortedatum\nTelefoonnummer: $telefoon\nTitel van de foto: $titel_foto\nCamera: $camera\nLens: $lens\nBeschrijving: $beschrijving";

  $verzender = "From: $naam <$email>";

  mail($ontvanger, $onderwerp, $bericht, $verzender);
  sql();
?>


<h2 class="text-center">Controleer je gegevens</h2>

<ul class="list-group">
    <li class="list-group-item"><strong>Naam: </strong> <?= $naam; ?></li>
    <li class="list-group-item"><strong>Straat en Nr: </strong> <?= $straat_nr; ?></li>
    <li class="list-group-item"><strong>Postcode: </strong> <?= $postcode; ?></li>
    <li class="list-group-item"><strong>Gemeente: </strong> <?= $gemeente; ?></li>
    <li class="list-group-item"><strong>E-mail adres: </strong> <?= $email; ?></li>
    <li class="list-group-item"><strong>Geboortedatum: </strong> <?= $geboortedatum; ?></li>
    <li class="list-group-item"><strong>Telefoonnummer: </strong> <?= $telefoon; ?></li>
    <li class="list-group-item"><strong>Titel van de foto: </strong> <?= $titel_foto; ?></li>
    <li class="list-group-item"><strong>Camera: </strong> <?= $camera; ?></li>
    <li class="list-group-item"><strong>Lens: </strong> <?= $lens; ?></li>
    <li class="list-group-item"><strong>Beschrijving van de foto: </strong> <?= $beschrijving; ?></li>
</ul>
<?php
function sql (){
    $servernaam = "localhost";
    $username = "root";
    $password = "";
    $database = "test";

    $conn = new mysqli($servernaam, $username, $password, $database);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

    $sql = "INSERT INTO wedstrijd (naam, straatnr, postcode, gemeente, email, geboortedatum, titelfoto, camera, lens, telefoon, beschrijving) 
    VALUES ('".$_POST['naam']."', '".$_POST['straat_nr']."', '".$_POST['postcode']."', '".$_POST['gemeente']."', '".$_POST['email']."', '".$_POST['geboortedatum']."', '".$_POST['titel_foto']."', '".$_POST['camera']."', '".$_POST['lens']."', '".$_POST['telefoon']."', '".$_POST['beschrijving']."')";

    echo $sql;

    if ($conn->query($sql) === true){
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

?>

    </div>
</body>
</html>