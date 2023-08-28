<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
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
      <h1 class="p-relative">Profile</h1>
      <div class="profile-page m-20">
        <!-- Start Overview -->
        <div class="overview bg-white rad-10 d-flex align-center">
          <div class="avatar-box txt-c p-20">
            <img class="rad-half mb-10" src="./imgs/nooraldeen-modified.png" alt="" />
            <h3 class="m-0">Nooraldeen</h3>
            <div class="level rad-6 bg-eee p-relative">
              <span style="width: 70%"></span>
            </div>
            <div class="rating mt-10 mb-10">
              <i class="fa-solid fa-star c-orange fs-13"></i>
              <i class="fa-solid fa-star c-orange fs-13"></i>
              <i class="fa-solid fa-star c-orange fs-13"></i>
              <i class="fa-solid fa-star c-orange fs-13"></i>
              <i class="fa-solid fa-star c-orange fs-13"></i>
            </div>
            <p class="c-grey m-0 fs-13">550 Rating</p>
          </div>
          <div class="info-box w-full txt-c-mobile">
            <!-- Start Information Row -->
            <div class="box p-20 d-flex align-center">
              <h4 class="c-grey fs-15 m-0 w-full">General Information</h4>
              <div class="fs-14">
                <span class="c-grey">Full Name: </span>
                <span>Nooraldeen Aloudat</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Gender: </span>
                <span>Male</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">University: </span>
                <span>Jordan University of Science and Technology</span>
              </div>
            </div>
            <!-- End Information Row -->
            <!-- Start Information Row -->
            <div class="box p-20 d-flex align-center">
              <h4 class="c-grey w-full fs-15 m-0">Personal Information</h4>
              <div class="fs-14">
                <span class="c-grey">Email: </span>
                <span>noor.feraas@gmail.com</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Phone:</span>
                <span>0776795866</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Date Of Birth:</span>
                <span>12/14/2002</span>
              </div>
            </div>
            <!-- End Information Row -->

            <!-- Start Information Row -->
            <div class="box p-20 d-flex align-center">
              <h4 class="c-grey w-full fs-15 m-0">Billing Information</h4>
              <div class="fs-14">
                <span class="c-grey">Payment Method:</span>
                <span>Credit card</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Email:</span>
                <span>noor.feraas@gmail.com</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Subscription:</span>
                <span>uniMaster</span>
              </div>
            </div>
            <!-- End Information Row -->
          </div>
        </div>
        <!-- End Overview -->
        <!-- Start Other Data -->
        <div class="other-data d-flex gap-20">
          <div class="socials-card p-20 bg-white rad-10 mt-20">
            <h2 class="mt-0 mb-10">Socials</h2>
            <ul class="m-0 txt-c-mobile">
              <li>
                <span class="d-flex align-items-center gap-2">
                  <i class="fa-brands fa-facebook" style="color: #1877f2;"></i><a href="">Nooraldeen</a>
                </span>
              </li>
              <li>
                <span class="d-flex align-items-center gap-2">
                  <i class="fa-brands fa-instagram" style="color: #ba0202;"></i><a href="">Noorodat9</a>
                </span>
              </li>
              <li>
                <span class="d-flex align-items-center gap-2">
                  <i class="fa-brands fa-linkedin" style="color: #08529b;"></i><a href="">Nooraldeen</a>
                </span>
              </li>
              <li>
                <span class="d-flex align-items-center gap-2">
                  <i class="fa-brands fa-github" style="color: #1b1d1e;"></i><a href="">Noorodat</a>
                </span>
              </li>
            </ul>
          </div>
          <div class="activities p-20 bg-white rad-10 mt-20 d-flex flex-column gap-2">
            <h2 class="mt-0 mb-10">Published Courses</h2>
            <p class="mt-0 mb-20 c-grey fs-15">Courses published by Nooraldeen</p>
            <a href="">
              <div class="activity d-flex align-center txt-c-mobile">
                <img src="./imgs/OS.jpg" alt="" />
                <div class="info">
                  <span class="d-block">Operation system</span>
                </div>
                <div class="date">
                  <span class="c-grey">2 months ago</span>
                </div>
              </div>
            </a>
            <a href="">
              <div class="activity d-flex align-center txt-c-mobile">
                <img src="./imgs/data structures.jpg" alt="" />
                <div class="info">
                  <span class="d-block">Data structres</span>
                </div>
                <div class="date">
                  <span class="c-grey">Yesterday</span>
                </div>
              </div>
            </a>
            <a href="">
              <div class="activity d-flex align-center txt-c-mobile">
                <img src="./imgs/machine learning.jpg" alt="" />
                <div class="info">
                  <span class="d-block">Machine Learning</span>
                </div>
                <div class="date">
                  <span class="c-grey">1 week ago</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- End Other Data -->
      </div>
    </div>
  </div>
  <!-- Start JS Links -->
  <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/jsLinks.php'; ?>
  <script src="./js/main.js"></script>
  <!-- End JS Links -->
</body>

</html>