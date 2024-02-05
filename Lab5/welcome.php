<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 text-center">
       <h1 class="text-primary">Welcome to your home page
       <span style="color: blueviolet;"> <?php echo $_SESSION["userName"]; ?> </span>
       </h1>
    <form method="post" action="<?php $_PHP_SELF ?>" class="mt-3">
       <button type="submit" class="btn btn-danger" name="logout">Logout</button>
    </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['logout'])) {
        session_destroy();
        unset($_SESSION['userName']);
        setcookie("PHPSESSID", "", time() - 1, "/");
        header("Location: login.php");
}
?>