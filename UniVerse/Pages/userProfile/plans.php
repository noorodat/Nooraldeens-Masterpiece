<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plans</title>
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
        <h1 class="p-relative">Plans</h1>
    <!-- Start subscription plans -->

    <div id="mainCoantiner">
  <!--dust particel-->
  <div class="margin-body section">
  
  <div>
    <div class="starsec"></div>
    <div class="starthird"></div>
    <div class="starfourth"></div>
    <div class="starfifth"></div>
  </div>
  <!--Dust particle end--->
  
  <div class="row justify-content-center pricing-content">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pricing-column-wrapper">
         <div class="pricing-column">
              <div class="pricing-price-row">
                <div class="pricing-price-wrapper">
                  <div class="pricing-price">
                    <div class="pricing-cost">$20</div>
                    <div class="time">Per semester</div>
                  </div>
                </div>
              </div>
              <div class="pricing-row-title">
                <div class="pricing_row_title">UniSilver</div>
              </div>
              <figure class="pricing-row">Publish up to 3 courses</figure>
              <figure class="pricing-row"><span>Free Shipping at shop</span></figure>
              <figure class="pricing-row">access 1 course for free</figure>
              <figure class="pricing-row">Create up to 3 teams</figure>
              <div class="pricing-footer">
                <div class="gem-button-container gem-button-position-center"><a href="#" class="gem-button gem-green">Subscribe</a></div>
              </div>
            </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pricing-column-wrapper">
       <div class="pricing-column">
              <div class="pricing-price-row">
                <div class="pricing-price-wrapper">
                  <div class="pricing-price">
                    <div class="pricing-cost">30$</div>
                    <div class="time">Per semester</div>
                  </div>
                </div>
              </div>
              <div class="pricing-row-title">
                <div class="pricing_row_title">uniMaster</div>
              </div>
              <figure class="pricing-row">Publish up to 5 courses</figure>
              <figure class="pricing-row"><span>Free Shipping at shop</span></figure>
              <figure class="pricing-row">access 2 courses for free</figure>
              <figure class="pricing-row">Create up to 5 teams</figure>
              <div class="pricing-footer">
                <div class="gem-button-container gem-button-position-center"><a class="gem-button gem-purpel">Subscribe</a></div>
              </div>
            </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pricing-column-wrapper">
      <div class="pricing-column">
              <div class="pricing-price-row">
                <div class="pricing-price-wrapper">
                  <div class="pricing-price">
                    <div class="pricing-cost">40$</div>
                    <div class="time" style="display:inline-block;">Per semester</div>
                  </div>
                </div>
              </div>
              <div class="pricing-row-title">
                <div class="pricing_row_title">UniVersal</div>
              </div>
              <figure class="pricing-row">Publish unlimited courses</figure>
              <figure class="pricing-row"><span>Free Shipping at shop</span></figure>
              <figure class="pricing-row">access 4 courses for free</figure>
              <figure class="pricing-row">Create up to 10 teams</figure>
              <div class="pricing-footer">
                <div class="gem-button-container gem-button-position-center"><a class="gem-button gem-pink">Subscribe</a></div>
              </div>
            </div>
    </div>
  </div>

 </div>
</div>

    <!-- End subscription plans -->
      </div>
    </div>
        <!-- Start JS Links -->
        <?php include $_SERVER["DOCUMENT_ROOT"].'/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/jsLinks.php';?>
        <script src="./js/main.js"></script>
    <!-- End JS Links -->
  </body>
</html>
