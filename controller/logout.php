<?php 
session_start();
if (isset($_SESSION['username'])) {
    $username = ", " . $_SESSION['username'];
} else {
    $username = "";
}
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Logout</title>
</head>
<header>
    <div class="d-flex justify-content-center bg-dark">
        <h1 class="text-light">Zippy Used Autos</h1>
    </div>
</header>

<body class="d-flex flex-column min-vh-100">
    <p class="mx-auto p-5 text-center"><?php echo "Thank you for logging out" . $username . "."?>
    <br><br><a href=../index.php>Click Here</a> to view our vehicle list.</p>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
<?php include_once("../view/footer.php") ?>

</html>