<header>
<div class="bg-dark">
    <div class="d-flex justify-content-center align-self-center">
        <h1 class="text-light">Zippy Used Autos</h1>
    </div>
    <div class="d-flex justify-content-end p-2">
        <?php 
            if (isset($_SESSION['username'])) {
        ?>
        <p class="text-light"><?php echo "Hello, " . $_SESSION['username'] . "! "?> 
            <a href="controller/logout.php">(Sign Out)</a>
        </p>
        <?php } else {?>
            <a href="controller/register.php" class="link-primary">Register</a>
        <?php } ?>
    </div>
</div>
</header>
