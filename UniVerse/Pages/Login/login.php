<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniVerse</title>

    <!-- Start Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->

    <!-- Start CSS Links -->
    <?php include $_SERVER["DOCUMENT_ROOT"].'/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/cssLinks.php'; ?>
    <link rel="stylesheet" href="./login.css">
    <!-- End CSS Links -->
</head>

<body>

    <div class="login-logo text-center p-3">
        <a href="/masterpiece/Nooraldeens-Masterpiece/UniVerse/Pages/Home/index.php"><span class="logo-text">UniVerse <i class="fa-solid fa-building-columns logo-icon"></i></span></a>
    </div>

    <div class="login p-4">
        <div class="left">
            <h2 class="mt-4 text-center fw-bold">Login</h2>
            <form action="">
                <input type="text" placeholder="Email" id="email">
                <input type="password" placeholder="Password" id="password">
                <input type="submit" value="Login">
            </form>
            <div class="createAccount text-center mt-4"><a href="/masterpiece/Nooraldeens-Masterpiece/UniVerse/Pages/Signup/signup.php" class="text-dark">Dont have? <span class="text-decoration-underline">Create one</span></a></div>
        </div>
        <div class="right">
            <div class="image">
                <img src="./images/login.png" alt="">
            </div>
        </div>
    </div>


    <!-- Start JS Links -->
    <?php include $_SERVER["DOCUMENT_ROOT"].'/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/jsLinks.php';?>
    <!-- End JS Links -->
</body>

</html>