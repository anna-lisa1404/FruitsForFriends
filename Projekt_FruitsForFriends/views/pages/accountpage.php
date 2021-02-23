<div>
    <div class="account-info">
        <?=getRandomProfilePicture()?>
        <h3>Hallo <?= $_SESSION['username']; ?>!</h3>
        <p>Deine Daten:</p>
        <p></p>
    </div>

    <div class="orders-info">
        <p>Deine Bestellungen:</p>
    </div>

    <div class="logout-button">
        <form action="index.php?c=pages&a=logout" method="post">
            <input name="submit_logout" type="submit" value="ausloggen">
        </form>
    </div>
</div>