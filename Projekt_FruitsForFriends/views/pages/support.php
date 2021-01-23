<div class="page-container">
<h1>Herzlich Willkommen beim Supportformular</h1>
    <p>Bitte füllen Sie das Formular komplett aus und senden Sie es anschließend per E-Mail an unsere Kundenabteilung.<br> Wir werden versuchen Ihnen umgehend bei Ihrem Anliegen zu helfen.</p>
    <hr>
    <form action="mailto:..." method="post" enctype="text/plain">
        <fieldset>
            <legend>Ihr Name</legend>

            <p>
                <label for="nachname" class="left">Name*:</label>
                <input type="text" placeholder="Ihr Nachname" name="nachname" id="nachname" class="right">

            </p>
            <p>
                <label for="vorname" class="left">Vorname*:</label>
                <input type="text" placeholder="Ihr Vorname" name="vorname" id="vorname" class="right">

            </p>
        </fieldset>
        <fieldset>
            <legend>Sonstige Angaben</legend>

            <p>
                <label for="kunde" class="left">Kunde*:</label>

                <select name="kunde" id="kunde" class="right">
                    <option value="private">Privatkunde</option>
                    <option value="business">Geschäftskunde</option>
                </select>

            </p>
            <p>
                <label for="nachricht" style="vertical-align:top;" class="left">Nachricht*:</label>

                <textarea name="nachricht" id="nachricht" cols="30" rows="10" placeholder="Nachrichtentext" class="right"></textarea>

            </p>
        </fieldset>
        <fieldset>
            <input type="submit" value="Absenden">
            <input type="reset" value="Zurücksetzen">
        </fieldset>
    </form>
</div>