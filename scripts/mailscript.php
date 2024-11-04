<?php

$ontvanger = 'test@localhost';

$onderwerp = 'Inschrijving fotowedstrijd';

$bericht = 'Naam: '.$_POST['naam'].'

Straat en Nr: '.$_POST['Straat en Nr'].'

Gemeente: '.$_POST['postcode'].' '.$_POST['gemeente'].'

Telefoonnummer: '.$_POST['telefoon'].'

E-mail adres: '.$_POST['email'].'

Geboortedatum: '.$_POST['geboortedatum'].'

Titel: '.$_POST['titel'].'

Camera: '.$_POST['camera'].'

Lens: '.$_POST['lens'].'

Commentaar: '.$_POST['commentaar'];


$verzender = 'From: '.$_POST['naam'].' <'.$_POST['email'].'>';


mail($ontvanger, $onderwerp, $bericht, $verzender);
session_start();

$_SESSION['naam'] = $_POST['naam'];

$_SESSION['straat'] = $_POST['straat'];

$_SESSION['postcode'] = $_POST['postcode'];

$_SESSION['gemeente'] = $_POST['gemeente'];

$_SESSION['telefoon'] = $_POST['telefoon'];

$_SESSION['email'] = $_POST['email'];

$_SESSION['geboortedatum'] = $_POST['geboortedatum'];

$_SESSION['titel'] = $_POST['titel'];

$_SESSION['camera'] = $_POST['camera'];

$_SESSION['lens'] = $_POST['lens'];

$_SESSION['commentaar'] = $_POST['commentaar'];


header("Location: ../begin.php?page=upload");

?>