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
        <link rel="stylesheet" href="./signup.css">
        <!-- End CSS Links -->
</head>
<body>

    <div class="signup-logo text-center p-3">
        <a href="/masterpiece/Nooraldeens-Masterpiece/UniVerse/Pages/Home/Home.php"><span class="logo-text">UniVerse <i class="fa-solid fa-building-columns logo-icon"></i></span></a>
    </div>

    <div class="signUp p-4">
        <div class="left">
            <h2 class="mt-4 text-center fw-bold">Sign Up</h2>
           <form action="">
               <div class="inpt d-flex align-items-center">
                <i class="fa-solid fa-user fs-4"></i>
                <input type="text" placeholder="First Name" id="email">
               </div>
               <div class="inpt d-flex align-items-center">
                <i class="fa-solid fa-user fs-4"></i>
                <input type="text" placeholder="Last Name" id="email">
               </div>
               <div class="inpt d-flex align-items-center">
                <i class="fa-solid fa-envelope fs-4"></i>
                <input type="text" placeholder="Email" id="email">
               </div>
               <div class="inpt d-flex align-items-center">
                <i class="fa-solid fa-lock fs-4"></i>
                <input type="password" placeholder="Password" id="password">
               </div>
               <div class="inpt d-flex align-items-center">
                <i class="fa-solid fa-lock fs-4"></i>
                <input type="password" placeholder="Confirm Password" id="password">
               </div>
               <div class="inpt d-flex align-items-center">
                <i class="fa-solid fa-phone fs-4"></i>
                <input type="text" placeholder="Phone" id="password">
               </div>
               <input type="submit" value="Sign Up" id="signUp">
           </form>
           <div class="createAccount text-center mt-4"><a href="/masterpiece/Nooraldeens-Masterpiece/UniVerse/Pages/Login/login.php" class="text-dark">Already have one? <span class="text-decoration-underline">Login</span></a></div>
        </div>
        <div class="right">
            <div class="image">
                <img src="./images/signUp.svg" alt="">
            </div>
        </div>
    </div>


    <!-- Start JS Links -->
    <?php include $_SERVER["DOCUMENT_ROOT"].'/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/jsLinks.php';?>
    <!-- End JS Links -->
</body>
</html>