<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>Checkout</title>

    <!-- Start Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->

    <!-- YOUR CUSTOM CSS -->
    <link rel="stylesheet" href="./checkout.css">
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/cssLinks.php'; ?>



</head>

<body>
	
	<div id="page" class="theia-exception">
		
	
	<main>

    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/navbar.php'; ?>

		<div class="">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<div class="box_cart">
						<div class="form_title">
							<h3><strong>1</strong>Your Details</h3>
						</div>
						<div class="step">
							<div class="row">
								<div class="col-sm-6">
									<span class="input">
										<input class="input_field" type="text">
										<label class="input_label">
											<span class="input__label-content">First name</span>
										</label>
									</span>
								</div>
								<div class="col-sm-6">
									<span class="input">
										<input class="input_field" type="text">
										<label class="input_label">
											<span class="input__label-content">Last name</span>
										</label>
									</span>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<span class="input">
										<input class="input_field" type="email">
										<label class="input_label">
											<span class="input__label-content">Email</span>
										</label>
									</span>
								</div>
								<div class="col-sm-6">
									<span class="input">
										<input class="input_field" type="email">
										<label class="input_label">
											<span class="input__label-content">Confirm email</span>
										</label>
									</span>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<span class="input">
										<input class="input_field" type="text">
										<label class="input_label">
											<span class="input__label-content">Telephone</span>
										</label>
									</span>
								</div>
							</div>
						</div>
						<hr>
						<!--End step -->

						<div class="form_title">
							<h3><strong>2</strong>Payment Information</h3>
						</div>
						<div class="step">
							<span class="input">
								<input class="input_field" type="text">
								<label class="input_label">
								  <span class="input__label-content">Name on card</span>
								</label>
							</span>
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text">
										<label class="input_label">
										  <span class="input__label-content">Card number</span>
										</label>
									</span>
								</div>
								<div class="col-md-6 col-sm-6 d-flex align-items-center">
									<img src="./images/credit-cards.jpg" alt="cards" width="80px";">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 add_top_30">
									<label>Expiration date</label>
									<div class="row">
										<div class="col-md-6">
											<span class="input">
												<input class="input_field" type="text">
												<label class="input_label">
												  <span class="input__label-content">MM</span>
												</label>
											</span>
										</div>
										<div class="col-md-6">
											<span class="input">
												<input class="input_field" type="text">
												<label class="input_label">
												  <span class="input__label-content">Year</span>
												</label>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6 add_top_30">
									<div class="form-group">
										<label>Security code</label>
										<div class="row">
											<div class="col-md-4">
												<span class="input">
													<input class="input_field" type="text">
													<label class="input_label">
													  <span class="input__label-content">CCV</span>
													</label>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--End row -->
						</div>
						<hr>
						<!--End step -->
						</div>
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
                            <div class="image mb-3">
                                <img src="../courses/images/machine learning.jpg" alt="" class="img-fluid">
                            </div>
							<div id="total_cart">
								Total <span class="float-right">15$</span>
							</div>
                            <div class="btns d-flex flex-column gap-2 mt-3">
                            <a href="" class="btn_1 full-width"><button class="myBtn main-btn w-100">Purchase</button></a>
                            </div>
						</div>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	
    <!-- Footer -->

    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/footer.php'; ?>


	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
    <script src="../../GlobalJS/jquery-3.5.1.min.js"></script>
    <script src="../../GlobalJS/common_scripts.js"></script>
    <script src="../../GlobalJS/main.js"></script>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Masterpiece/Nooraldeens-Masterpiece/UniVerse/GlobalPHP/jsLinks.php'; ?>
	
  
</body>
</html>