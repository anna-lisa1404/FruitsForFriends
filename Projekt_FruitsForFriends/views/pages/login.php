<div class="page-container">
    <div class="background-picture">
       <img src=<?= IMAGEPATH.'lots_of_fruits/victor-figueroa-huUI0y0ERMM-unsplash.jpg' ?> alt="a lot of limes"> 
    </div>

    <div class="login-wrapper">
        <div class="form-area">
            <h1>Willkommen zurück!</h1>

            <form action="index.php?c=pages&a=login" method="post">
                <div class="form-field">
                    <label for="username">Nutzername:</label><br>
                    <input id="username" name="username" type="username" placeholder="dein Nutzername" required>
                </div>

                <br>

                <div class="form-field">
                    <label for="password">Passwort:</label><br>
                    <input id="password" name="password" type="password" placeholder="dein Passwort" required>
                </div>

                <div class="form-submit">
                    <br>
                    <input name="submit" type="submit" value="einloggen">
                </div>
                <div class="form-link">
                    <br>
                    <a href="index.php?c=pages&a=registration">Noch kein Mitglied? Hier kannst du dich registrieren!</a>
                <div>
            </form>
        </div>
    </div>
</div>