<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Settings</title>
  <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/cssLinks.php'; ?>
  <link rel="stylesheet" href="css/framework.css" />
  <link rel="stylesheet" href="css/master.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="page d-flex">
    <?php include('./sidebar.php'); ?>
    <div class="content w-full">
      <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/navbar.php'; ?>

      <h1 class="p-relative">Settings</h1>
      <div class="settings-page m-20 d-grid gap-20">
        <!-- Start Settings Box -->
        <div class="p-20 bg-white rad-10">
          <h2 class="mt-0 mb-10">General Info</h2>
          <p class="mt-0 mb-20 c-grey fs-15">General Information About Your Account</p>
          <div class="mb-20">
            <label class="fs-14 c-grey d-block mb-10" for="first">Edit photo</label>
            <div class="image p-3">
                <img src="./imgs/nooraldeen-modified.png" alt="" width="150px">
                <label for="changePhoto"><i class="fa-regular fa-pen-to-square"></i></label>
                <input type="file" id="changePhoto" hidden accept="image/*">
            </div>
          </div>
          <div class="mb-20">
            <label class="fs-14 c-grey d-block mb-10" for="first">First Name</label>
            <input class="b-none border-ccc p-10 rad-6 d-block w-full" type="text" id="first" placeholder="First Name" />
          </div>
          <div class="mb-20">
            <label class="fs-14 c-grey d-block " for="last">Last Name</label>
            <input class="b-none border-ccc p-10 rad-6 d-block w-full" id="last" type="text" placeholder="Last Name" />
          </div>
          <div>
            <label class="fs-14 c-grey d-block " for="email">Email</label>
            <input class="email b-none border-ccc p-10 rad-6 w-full mr-10" id="email" type="email" value="o@nn.sa" disabled />
            <a class="c-blue" href="#" id="changeLink">Change</a>
          </div>
          <a href=""><button class="myBtn main-btn mt-4">Save</button></a>
        </div>
        <!-- End Settings Box -->
        <!-- Start Settings Box -->
        <div class="p-20 bg-white rad-10">
          <h2 class="mt-0 mb-10">Security Info</h2>
          <p class="mt-0 mb-20 c-grey fs-15">Security Information About Your Account</p>
          <div class="sec-box mb-15 between-flex">
            <div>
              <span>Password</span>
              <p class="c-grey mt-5 mb-0 fs-13">Last Change On 25/10/2021</p>
            </div>
            <a class="" href="#"><button class="myBtn main-btn">Change</button></a>
          </div>
          <div class="sec-box mb-15 between-flex">
            <div>
              <span>Two-Factor Authentication</span>
              <p class="c-grey mt-5 mb-0 fs-13">Enable/Disable The Feature</p>
            </div>
            <label>
              <input class="toggle-checkbox" type="checkbox" checked />
              <div class="toggle-switch"></div>
            </label>
          </div>
          <div class="sec-box between-flex">
            <div>
              <span>Devices</span>
              <p class="c-grey mt-5 mb-0 fs-13">Check The Login Devices List</p>
            </div>
            <a class="bg-eee c-black btn-shape" href="#">Devices</a>
          </div>
        </div>
        <!-- End Settings Box -->

      </div>
    </div>
  </div>
  <!-- Start JS Links -->
  <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/jsLinks.php'; ?>
  <script src="./js/main.js"></script>
  <script src='./js/settings.js'></script>
  <!-- End JS Links -->
</body>

</html>