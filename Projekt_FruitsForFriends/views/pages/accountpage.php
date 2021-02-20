<div class="page-container">
    <p>Hallo <?= $_SESSION['username']; ?>!</p>
    <br><br>
    <form action="index.php?c=pages&a=logout" method="post">
        <input name="submit_logout" type="submit" value="ausloggen">
    </form>
</div>