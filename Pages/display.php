<?php
// Create database connection using config file
include_once("PHP/config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM penjualan");
?>

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

<style>
  #table {
	border-collapse: collapse;
  width: 100%;
  }

  th, td {
	padding: 8px;
	text-align: left;
	border-bottom: 1px solid #ddd;
  }

  tr:hover {
	  background-color:#f5f5f5;
}
</style>

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
				<li><a href="../index">Home</a></li>
				<li><a href="about">About us</a></li>
				<li><a href="menu" >Restaurant</a></li>
				<li><a href="contact">Contact</a></li>
				<i>
				<li><a href="display" class="active">*Display data</a></li>
			</i>
			</ul>
			<div class="header-right">
				<p><span>Reservations</span> <i class="fa fa-phone"></i>Uknown</p>
			</div>
		</div>
	</header>
	<!-- Header section end -->

  <!-- Page info section -->
  <section class="page-top-info set-bg" data-setbg="../img/page-top-bg/1.jpg">
  		<div class="ptf-center">
  			<div class="container">
  				<h2>Data Display<span>.</span></h2>
  			</div>
  		</div>
  	</section>
  	<!-- Page info section end -->

  	<!-- Intro section -->
  	<section class="inter-section spad">
  		<div class="container">
  			<div class="section-title">
  				<i class="flaticon-001-wine"></i>
  				<h2>Data Display</h2>
        </div>

        <!-- Search -->
  			<div class="row">
  				<div class="col-md-12">
          <div class="col-xl-3 col-lg-4 col-md-6 sidebar">
    <div class="sb-widget">
  						<form class="sb-search" >
              <input id="myInput" type="text" placeholder="Search.." onkeyup="myFunction()">
  							<button><i class="fa fa-search"></i></button>
  						</form>
            </div>
            <!-- Search End -->
  </div><br><br>
            <table id="table">
            <tr>
      <th>Name</th>
      <th>E-mail</th>
      <th>Message</th>
      <!-- <th>Action</th> -->
    </tr>
		<?php
		    while($user_data = mysqli_fetch_array($result)) {
		        echo "<tr>";
		        echo "<td>".$user_data['name']."</td>";
		        echo "<td>".$user_data['email']."</td>";
		        echo "<td>".$user_data['message']."</td>";
		        // echo "<td>
						// <a href='form_edit.php?id=$user_data[id]'>Edit</a> |
						// <a href='PHP/delete.php?id=$user_data[id]'>Delete</a></td>
						// </tr>";
		    }
		    ?>
  </table>
<!-- // <a href='edit.php?id=$user_data[id]'>Edit</a> | -->
        </div>
  		</div>
  	</section>
  	<!-- Intro section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../../js/owl.carousel.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/filter.js"></script>


    </body>
</html>
