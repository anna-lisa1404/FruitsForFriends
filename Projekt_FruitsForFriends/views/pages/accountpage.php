<div class="background-picture-accountpage">
    <div class="account-info">
        <div class="random-profile-picture">
            <?=getRandomProfilePicture()?>
        </div>

        <div class="account-data">
            <h3>Hallo <?= $_SESSION['username']; ?>!</h3>
            <br>
            <p>Deine Daten:</p>
            <p> <?= getSalutation().' '.$_SESSION['firstname'].' '.$_SESSION['lastname'] ?></p>
            <p> <?= $_SESSION['email'] ?></p>
            <br>
            <p> <?= $_SESSION['street'].' '.$_SESSION['street_number'] ?></p>
            <p> <?= $_SESSION['zipCode'] ?></p>
            <p> <?= $_SESSION['city'] ?></p>
        </div>
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