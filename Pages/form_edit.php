<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>CatringKu</title>
	<meta charset="UTF-8">
	<meta name="description" content="Pulse Restaurant HTML Template">
	<meta name="keywords" content="pulse, restaurant, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<!-- <link href="img/favicon.ico" rel="shortcut icon"/> -->

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="site-logo">
				<h2>CatringKu<span>.</span></h2>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- menu -->
			<ul class="main-menu">
				<li><a href="../index.php">Home</a></li>
				<!-- <li><a href="about.php">About us</a></li>
				<li><a href="menu.php">Restaurant</a></li>
				<li><a href="contact.php" class="active">Contact</a></li>
				<i>
				<li><a href="display.php">*Display data</a></li> -->
			</i>
			</ul>
			<div class="header-right">
				<p><span>Reservations</span> <i class="fa fa-phone"></i>Uknown</p>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page info section -->
	<section class="page-top-info set-bg" data-setbg="../img/page-top-bg/4.jpg">
		<div class="ptf-center">
			<div class="container">
				<h2>Edit Data<span>.</span></h2>
			</div>
		</div>
	</section>
	<!-- Page info section end -->

	<footer class="footer-section">
			<!-- map -->
			<!-- <div class="map-warp" id="map-canvas"></div> -->
			<div class="footer-bg-area set-bg" data-setbg="../img/footer-bg.jpg">
				<div class="contact-form-area" >
					<div class="container">
						<div class="col-lg-10 offset-lg-1">
							<div class="contact-form-warp" style="background-color:#F0F0DE;">
								<div class="section-title">
									<i class="flaticon-026-chicken-1"></i>
									<h2>Contact us</h2>
								</div>
								<!-- contact form -->

                <form class="contact-form" method="POST" action="PHP/edit.php">

									<div class="row">
										<div class="col-md-6">
											<input type="text" name="name" style="background-color:white;" placeholder="Name" value=<?php echo $name;?>>
										</div>
										<div class="col-md-6">
											<input type="email" name="email" style="background-color:white;" placeholder="E-mail" value=<?php echo $email;?>>
										</div>
										<div class="col-md-12">
											<textarea type="message" name="message" style="background-color:white;" placeholder="Message" value=<?php echo $message;?>></textarea>
											<div class="text-center">
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
												<button class="site-btn" name="update" value="Update">Send Message</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

        <!-- <?php
        // include database connection file
        // include_once("PHP/config.php");

        // Check if form is submitted for user update, then redirect to homepage after update
        // if(isset($_POST['update']))
        // {
        //     $id = $_POST['id'];
        //
        //     $name=$_POST['name'];
        //     $email=$_POST['email'];
        //     $message=$_POST['message'];

            // update user data
            // $result = mysqli_query($mysqli, "UPDATE penjualan SET name='$name',email='$email',message='$message' WHERE id=$id");

            // Redirect to homepage to display updated user in list
        //     header("Location:display.php");
        // }
        // ?>
        // <?php
        // Display selected user data based on id
        // Getting id from url
        // $id = $_GET['id'];

        // Fetech user data based on id
        // $result = mysqli_query($mysqli, "SELECT * FROM penjualan WHERE id=$id");
        //
        // while($user_data = mysqli_fetch_array($result))
        // {
        //     $name = $user_data['name'];
        //     $email = $user_data['email'];
        //     $message = $user_data['message'];
        // }
        // ?>

				<div class="copyright">
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by CatringKu</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	</div>
			</div>
		</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/main.js"></script>


    </body>
</html>
