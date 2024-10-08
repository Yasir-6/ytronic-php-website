<?php 
if ( ! defined( 'REQABSP' ) ) {
	exit; // Exit if accessed directly.
}

function page_title(){ return 'Home Page - Ytronic'; }

function page_content() // Main Content
{
	$currentPage = basename(__FILE__, ".php");
	
	ob_start(); // Start content buffer.
?>

<div class="container-fluid pb-5 mt-5 mt-lg-0 pt-5 pt-lg-0">
	<div class="container py-5">
		<div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
			<h5 class="fw-bold text-primary text-uppercase">My page</h5>
			<h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
		</div>
		<div class="row g-5">
			<div class="col-lg-4 col-md-6">
				<div class="service-item shadow bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
					<div class="service-icon">
						<i class="fa fa-shield-alt text-white"></i>
					</div>
					<h4 class="mb-3">Cyber Security</h4>
					<p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
					<a class="btn btn-lg btn-primary rounded" href="">
						<i class="bi bi-arrow-right"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item shadow bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
					<div class="service-icon">
						<i class="fa fa-chart-pie text-white"></i>
					</div>
					<h4 class="mb-3">Data Analytics</h4>
					<p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
					<a class="btn btn-lg btn-primary rounded" href="">
						<i class="bi bi-arrow-right"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item shadow bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
					<div class="service-icon">
						<i class="fa fa-code text-white"></i>
					</div>
					<h4 class="mb-3">Web Development</h4>
					<p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
					<a class="btn btn-lg btn-primary rounded" href="">
						<i class="bi bi-arrow-right"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item shadow bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
					<div class="service-icon">
						<i class="fab fa-android text-white"></i>
					</div>
					<h4 class="mb-3">Apps Development</h4>
					<p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
					<a class="btn btn-lg btn-primary rounded" href="">
						<i class="bi bi-arrow-right"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="service-item shadow bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
					<div class="service-icon">
						<i class="fa fa-search text-white"></i>
					</div>
					<h4 class="mb-3">SEO Optimization</h4>
					<p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
					<a class="btn btn-lg btn-primary rounded" href="">
						<i class="bi bi-arrow-right"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="position-relative shadow bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
					<h3 class="text-white mb-3">Call Us For Quote</h3>
					<p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod</p>
					<h2 class="text-white mb-0">+012 345 6789</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<script>document.getElementById("<?php echo $currentPage; ?>").classList.add("active");</script>
<?php

	$pageContent = ob_get_contents();
	ob_end_clean(); // End content buffer.
	
	echo $pageContent;
}
