<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
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
        <h1 class="p-relative">Dashboard</h1>
        <div class="wrapper d-grid gap-20">
          <!-- Start Welcome Widget -->
          <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
            <div class="intro p-20 d-flex space-between bg-eee">
              <div>
                <h2 class="m-0">Welcome</h2>
                <p class="c-grey mt-5">Nooraldeen</p>
              </div>
              <img class="hide-mobile" src="imgs/welcome.png" alt="" />
            </div>
            <img src="./imgs/nooraldeen-modified.png" alt=""  class="avatar">
            <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
              <div>Nooraldeen <span class="d-block c-grey fs-14 mt-10">Student</span></div>
              <div>3 <span class="d-block c-grey fs-14 mt-10">courses</span></div>
              <div>$60 <span class="d-block c-grey fs-14 mt-10">Earned</span></div>
            </div>
            <a href="profile.php" class="visit d-block fs-14 bg-blue c-white w-fit btn-shape">Profile</a>
          </div>
          <!-- End Welcome Widget -->


          <!-- Start Ticket Widget -->
          <div class="tickets p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">My Statistics</h2>
            <p class="mt-0 mb-20 c-grey fs-15">Everything About Courses Statistics</p>
            <div class="d-flex txt-c gap-20 f-wrap">
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-rectangle-list fa-2x mb-10 c-orange"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">1500</span>
                courses views
              </div>
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-circle-check fa-2x mb-10 c-green"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">30</span>
                Total Enrolled students
              </div>
            </div>
          </div>
          <!-- End Ticket Widget -->
          <!-- Start Latest News Widget -->
          <div class="latest-news p-20 bg-white rad-10 txt-c-mobile">
            <h2 class="mt-0 mb-20">Latest courses</h2>
            <div class="news-row d-flex align-center">
              <img src="imgs/news-01.png" alt="" />
              <div class="info">
                <h3>Created SASS Section</h3>
                <p class="m-0 fs-14 c-grey">New SASS Examples & Tutorials</p>
              </div>
              <div class="btn-shape bg-eee fs-13 label">3 Days Ago</div>
            </div>
            <div class="news-row d-flex align-center">
              <img src="imgs/news-02.png" alt="" />
              <div class="info">
                <h3>Changed The Design</h3>
                <p class="m-0 fs-14 c-grey">A Brand New Website Design</p>
              </div>
              <div class="btn-shape bg-eee fs-13 label">5 Days Ago</div>
            </div>
            <div class="news-row d-flex align-center">
              <img src="imgs/news-03.png" alt="" />
              <div class="info">
                <h3>Team Increased</h3>
                <p class="m-0 fs-14 c-grey">3 Developers Joined The Team</p>
              </div>
              <div class="btn-shape bg-eee fs-13 label">7 Days Ago</div>
            </div>
            <div class="news-row d-flex align-center">
              <img src="imgs/news-04.png" alt="" />
              <div class="info">
                <h3>Added Payment Gateway</h3>
                <p class="m-0 fs-14 c-grey">Many New Payment Gateways Added</p>
              </div>
              <div class="btn-shape bg-eee fs-13 label">9 Days Ago</div>
            </div>
          </div>
          <!-- End Latest News Widget -->

          <!-- Start Latest Uploads Widget -->
          <div class="latest-uploads p-20 bg-white rad-10">
            <h2 class="mt-0 mb-20">Latest files</h2>
            <ul class="m-0">
              <li class="between-flex pb-10 mb-10">
                <div class="d-flex align-center">
                  <img class="mr-10" src="imgs/pdf.svg" alt="" />
                  <div>
                    <span class="d-block">my-file.pdf</span>
                    <span class="fs-15 c-grey">File</span>
                  </div>
                </div>
                <div class="bg-eee btn-shape fs-13">2.9mb</div>
              </li>
              <li class="between-flex pb-10 mb-10">
                <div class="d-flex align-center">
                  <img class="mr-10" src="imgs/avi.svg" alt="" />
                  <div>
                    <span class="d-block">My-Video-File.avi</span>
                    <span class="fs-15 c-grey">Admin</span>
                  </div>
                </div>
                <div class="bg-eee btn-shape fs-13">4.9mb</div>
              </li>
              <li class="between-flex pb-10 mb-10">
                <div class="d-flex align-center">
                  <img class="mr-10" src="imgs/psd.svg" alt="" />
                  <div>
                    <span class="d-block">My-Psd-File.pdf</span>
                    <span class="fs-15 c-grey">Osama</span>
                  </div>
                </div>
                <div class="bg-eee btn-shape fs-13">4.5mb</div>
              </li>
              <li class="between-flex pb-10 mb-10">
                <div class="d-flex align-center">
                  <img class="mr-10" src="imgs/zip.svg" alt="" />
                  <div>
                    <span class="d-block">My-Zip-File.pdf</span>
                    <span class="fs-15 c-grey">User</span>
                  </div>
                </div>
                <div class="bg-eee btn-shape fs-13">8.9mb</div>
              </li>
              <li class="between-flex pb-10 mb-10">
                <div class="d-flex align-center">
                  <img class="mr-10" src="imgs/dll.svg" alt="" />
                  <div>
                    <span class="d-block">My-DLL-File.pdf</span>
                    <span class="fs-15 c-grey">Admin</span>
                  </div>
                </div>
                <div class="bg-eee btn-shape fs-13">4.9mb</div>
              </li>
              <li class="between-flex">
                <div class="d-flex align-center">
                  <img class="mr-10" src="imgs/eps.svg" alt="" />
                  <div>
                    <span class="d-block">My-Eps-File.pdf</span>
                    <span class="fs-15 c-grey">Designer</span>
                  </div>
                </div>
                <div class="bg-eee btn-shape fs-13">8.9mb</div>
              </li>
            </ul>
          </div>
          <!-- End Latest Uploads Widget -->

        </div>
        <!-- Start Projects Table -->
        <div class="projects p-20 bg-white rad-10 m-20">
          <h2 class="mt-0 mb-20">Students</h2>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>Course Name</td>
                  <td>Enrollment Date</td>
                  <td>Student name</td>
                  <td>Price</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Ministry Wikipedia</td>
                  <td>10 May 2022</td>
                  <td>Ministry</td>
                  <td>$5300</td>
                </tr>
                <tr>
                  <td>Idk</td>
                  <td>12 Oct 2021</td>
                  <td>Idk Company</td>
                  <td>$1500</td>
                </tr>
                <tr>
                  <td>Bouba App</td>
                  <td>05 Sep 2021</td>
                  <td>Bouba</td>
                  <td>$800</td>
                </tr>
                <tr>
                  <td>Mahmoud Website</td>
                  <td>22 May 2021</td>
                  <td>Mahmoud</td>
                  <td>$600</td>
                </tr>
                <tr>
                  <td>Sayed Website</td>
                  <td>24 May 2021</td>
                  <td>Sayed</td>
                  <td>$300</td>
                </tr>
                <tr>
                  <td>Arena Application</td>
                  <td>01 Mar 2021</td>
                  <td>Arena Company</td>
                  <td>$2600</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Projects Table -->
      </div>
    </div>
  </body>
</html>
