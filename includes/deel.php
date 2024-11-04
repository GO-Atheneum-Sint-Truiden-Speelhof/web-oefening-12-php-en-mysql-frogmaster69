
    <div class="jumbotron">
        <h1 class="display-4 text-center">Klaar om deel te nemen? Shoot!</h1>
    </div>

    <form method="post" action="begin.php?page=confirm" style="max-width: 600px; margin: 0 auto;">
        <div class="form-group">
            <label for="naam">Naam</label>
            <input type="text" id="naam" name="naam" class="form-control" placeholder="Voer je naam in" required>
        </div>

        <div class="form-group">
            <label for="straat_nr">Straat en Nr</label>
            <input type="text" id="straat_nr" name="straat_nr" class="form-control" placeholder="Straat en huisnummer" required>
        </div>

        <div class="form-group">
            <label for="postcode">Postcode</label>
            <input type="number" id="postcode" name="postcode" class="form-control" placeholder="Voer je postcode in" required>
        </div>

        <div class="form-group">
            <label for="gemeente">Gemeente</label>
            <input type="text" id="gemeente" name="gemeente" class="form-control" placeholder="Voer je gemeente in" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail adres</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Voer je e-mailadres in" required>
        </div>

        <div class="form-group">
            <label for="geboortedatum">Geboortedatum</label>
            <input type="date" id="geboortedatum" name="geboortedatum" class="form-control">
        </div>

        <div class="form-group">
            <label for="titel_foto">Titel van de foto</label>
            <input type="text" id="titel foto" name="titel_foto" class="form-control" placeholder="Geef je foto een titel" required>
        </div>

        <div class="form-group">
            <label for="camera">Camera</label>
            <input type="text" id="camera" name="camera" class="form-control" placeholder="Welk type camera heb je gebruikt?" required>
        </div>

        <div class="form-group">
            <label for="lens">Lens</label>
            <input type="text" id="lens" name="lens" class="form-control" placeholder="Welke lens heb je gebruikt?" required>
        </div>

        <div class="form-group">
            <label for="telefoon">Telefoonnummer</label>
            <input type="text" id="telefoon" name="telefoon" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="beschrijving">Beschrijf je foto</label>
            <textarea id="beschrijving" name="beschrijving" class="form-control" rows="4" placeholder="Beschrijf je foto..."></textarea>
        </div>

        <div class="text-center">
            <input type="submit" value="Deelnemen" class="btn btn-primary btn-lg">
        </div>
    </form>