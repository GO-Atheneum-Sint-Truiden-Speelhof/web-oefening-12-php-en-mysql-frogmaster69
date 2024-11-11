# Feedback #
## De opdrachten ##
| Opdracht | Goed (5) | Voldoende (3) | Onvoldoende (1) | Niet (0) | Score (35) |
| :------- | :---: | :---------: | :-----------: | :----: |---:|
| De leerling voorziet een startpagina waar de gebruiker moet akkoord gaan met het gebruik van cookies. De leerling start een cookie. | X | | | |5 |
| De leerling maakt een inschrijvingsformulier en kan dit uitlezen.  | X | | | | 5|
| De leerling bewaart de gegevens in een databank.  | X | | | | 5|
| De leerling kan de gegevens uitlezen uit de databank en tonen in een tabel of lijst.  | | | | X | 0|
| De leerling voorziet een loginpagina die een gebruiker en paswoord controleert in de databank. | X | | | | 5|
| De leerling voorziet paswoord-hashing om het paswoord veilig te bewaren.  | X | | | | 5|
| De leerling zorgt dat enkel een ingelogde persoon de lijst met gegevens kan bekijken. | | | | X |0 |
||||||8|


## Algemene feedback ##
* login2.php (29): Knappe methode om SQL-injectie te voorkomen. Je gebruikt zowel het *'escapen'* van de input als een *prepared statement*. ( +1 )
* login2.php (40): Jammer dat je hier laat doorsturen naar een pagina die je zelf niet hebt. Dit had naar een pagina gemoeten waar de lijst met inschrijvingen gemaakt wordt. ( -1 )
* login2.php (43): Opletten met foutboodschappen zoals deze. Als je een verschillende boodschap stuurt voor een foutief paswoord of onbekende gebruikersnaam dan kan men gaan proberen tot men een juiste gebruikersnaam gevonden heeft. Het is beter om een algemene boodschap te voorzien.

* Je behaalde een score van __25/35__
