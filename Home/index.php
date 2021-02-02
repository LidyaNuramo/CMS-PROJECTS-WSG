<?php
include('../DB/process.php');
include('header.php');
?> 
		
		<link rel="stylesheet" href="../CSS/bootstrap.min.css">
		<link rel="stylesheet" href="../CSS/all.min.css">
		<link rel="stylesheet" href="../CSS/templatemo-style.css">
		
		<!--div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
			<form class="d-flex tm-search-form">
				<input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success tm-search-btn" type="submit">
					<i class="fas fa-search"></i>
				</button>
			</form>
		</div-->
		
		<div class="container-fluid tm-container-content tm-mt-60">
			<div class="row mb-4">
				<h2 class="col-6 tm-text-primary">
					Latest Exercises
				</h2>
			</div>
			<div class="row tm-mb-90 tm-gallery">
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
					<figure class="effect-ming tm-video-item">
						<img src="../Image/ex1.png" alt="Image" class="img-fluid">
						<figcaption class="d-flex align-items-center justify-content-center">
							<h2>Exercise 1</h2>
							<a href="../Exercise1">View more</a>
						</figcaption>                    
					</figure>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
					<figure class="effect-ming tm-video-item">
						<img src="../Image/ex2.png" alt="Image" class="img-fluid">
						<figcaption class="d-flex align-items-center justify-content-center">
							<h2>Exercise 2</h2>
							<a href="../Exercise2">View more</a>
						</figcaption>                    
					</figure>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
					<figure class="effect-ming tm-video-item">
						<img src="" alt="Image" class="img-fluid">
						<figcaption class="d-flex align-items-center justify-content-center">
							<h2>Exercise 3</h2>
							<a href="../Exercise3">View more</a>
						</figcaption>                    
					</figure>
				</div>
			</div> <!-- row -->
		</div> <!-- container-fluid, tm-container-content -->

		
		<div class="all">
			<div class="container" style="margin-top: 80px;font-size: 150%;">
				<h1>Exercises</h1>
				<p><h2>Student Name: Lidya Nuramo</h2></p>
				<p><h2>Student ID: 030794</h2></p>
				<h3>
					<p><a href="../Exercise1">Exercies 1.</a></p>
					<p><a href="../Exercise2">Exercies 2.</a></p>
					<p><a href="../Exercise3">Exercies 3.</a></p>
				</h3>
			</div>
		</div>
<?php
	include('footer.php');
?>
