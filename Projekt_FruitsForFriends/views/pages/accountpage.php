<div class="page-container">
    <p>Hallo <?= $_SESSION['username']; ?>!</p>
    <br><br>
    <div class="account-info">
        <img src=<?= IMAGEPATH.'single_fruits/single_papaya.jpg' ?> alt="single fruit profile picture">
    </div>
    <form action="index.php?c=pages&a=logout" method="post">
        <input name="submit_logout" type="submit" value="ausloggen">
    </form>
</div>