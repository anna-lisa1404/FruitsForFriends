
    <div class="account-info">
        <?=getRandomProfilePicture()?>
        <h3>Hallo <?= $_SESSION['username']; ?>!</h3>
        <p>Deine Daten:</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid neque laboriosam, quos exercitationem atque mollitia labore deserunt, dignissimos fugiat excepturi molestias asperiores velit officiis libero. Reprehenderit qui ex sunt itaque.</p>
    </div>

    <div class="orders-info">
        <p>Deine Bestellungen:</p>
    </div>

    <div class="logout-button">
        <form action="index.php?c=pages&a=logout" method="post">
            <input name="submit_logout" type="submit" value="ausloggen">
        </form>
    </div>
