<?php
 require 'config.php';
 if (isset($_GET['cat'])) {
$cat = $_GET['cat'];
      $plats= $bd->query("SELECT * FROM enregistrement WHERE cat_id = $cat")->fetchAll();
 }else{
    $plats= $bd->query("SELECT * FROM enregistrement")->fetchAll();

 }

 $categorie = $bd -> query("SELECT * FROM categorie")->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Taste.it - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-12 col-md d-flex align-items-center">
					<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
				</div>
				<div class="col-12 col-md d-flex justify-content-md-end">
					<p class="mb-0">Mon - Fri / 9:00-21:00, Sat - Sun / 10:00-20:00</p>
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">Les délices.<span>Porto-Novo</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="chef.php" class="nav-link">Chef</a></li>
					<li class="nav-item active"><a href="menu.php" class="nav-link">Menu</a></li>
					<li class="nav-item"><a href="reservation.php" class="nav-link">Reservation</a></li>
					<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate text-center mb-5">
					<h1 class="mb-2 bread">Menu</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Menu <i class="fa fa-chevron-right"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
            
		<?php
                          foreach ($categorie as $cat):
                        ?>
                        <li class="nav-item" >
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="">
                                <div class="ps-3">
                                    <a href="menu.php?cat=<?= $cat->id?>" style="cursor : pointer" class="text-body" data-filter=""><?= $cat->categorie?></a>

                                </div>
                            </a>
                        </li>
                        <?php
                          endforeach
                        ?>
		<!--modification-->
		<center><a href="./listepanier.php">Voir mes commandes -></a></center>
		<!--modification-->
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<!--<span class="subheading">Specialties</span>-->
					<h2 class="mb-4">Our Menu</h2>
					<ul style="list-style: none; display: flex; justify-content: space-between;"> 
					<li><a href="">Plats Africains</a></li>
					<li><a href="">Plats Américains</a></li>
					<li><a href="">Plats Asiatiques</a></li>
					<li><a href="">Plats Europeen</a></li>
				</ul>
				</div>
			</div>
			<div class="row">
			
		
		</div>

		<!--modification-->
		<div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">

                            <div class="row g-4">
                            <?php
                          foreach ($plats as $plat):
                        ?>
                               <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?=$plat->img?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?=$plat->nom?></span>
                                                <span class="text-primary"><?=$plat->prix?></span>
                                            </h5>
                                            <small class="fst-italic"><?=$plat->descr?></small>
                                            <a href="panier.php?id=<?=$plat->id?>">ajouter au panier</a> <br>  <br>
                                        </div>
                                    </div>
                                </div>
                                <?php
                          endforeach
                        ?>
		</div>				
		<!--modification-->

	</section>

	<section class="ftco-section ftco-wrap-about bg-primary ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
					<form action="#" class="appointment-form">
						<h3 class="mb-3">Book your Table</h3>
						<div class="row justify-content-center">
							<div class="col-md-4">
								<div class="form-group">
									<input type="name" class="form-control" placeholder="Name">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-calendar"></span></div>
										<input type="text" class="form-control book_date" placeholder="Check-In">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-clock-o"></span></div>
										<input type="text" class="form-control book_time" placeholder="Time">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
											<select name="" id="" class="form-control">
												<option value="">Guest</option>
												<option value="">1</option>
												<option value="">2</option>
												<option value="">3</option>
												<option value="">4</option>
												<option value="">5</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-no-pb ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Taste.it</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
							<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Open Hours</h2>
						<ul class="list-unstyled open-hours">
							<li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
							<li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
							<li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
							<li class="d-flex"><span>Sunday</span><span> Closed</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Instagram</h2>
						<div class="thumb d-sm-flex">
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
							</a>
						</div>
						<div class="thumb d-flex">
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Newsletter</h2>
						<p>Far far away, behind the word mountains, far from the countries.</p>
						<form action="#" class="subscribe-form">
							<div class="form-group">
								<input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
								<input type="submit" value="Subscribe" class="form-control submit px-3">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid px-0 bg-primary py-3">
			<div class="row no-gutters">
				<div class="col-md-12 text-center">

					<p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.timepicker.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>
		
	</body>
	</html>