<!-- Header Content -->
<?php
  $this->load->view('header');
?>
<!-- /Header Content -->

	<body>
		
		<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="<?php echo base_url(); ?>" class="branding">
						<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" class="logo">
						<div class="logo-type">
							<h1 class="site-title">Weather Forecast</h1>
							<small class="site-description">An sample apps</small>
						</div>
					</a>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="<?php echo base_url(); ?>">Home</a></li>
							<li class="menu-item"><a href="<?php echo base_url('history'); ?>">Daftar Kota</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<div class="hero" data-bg-image="<?php echo base_url(); ?>assets/images/banner.png">
				<div class="container">
					<form action="<?php echo base_url('dashboard/search')?>" class="find-location" method="post">
						<input type="text" name="keyword" placeholder="Find your location...">
						<input type="submit" value="Find">
					</form>

				</div>
			</div>
			<div class="forecast-table">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
							<div class="forecast-header">
								<div class="day"></div>
								<div class="date"></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location"></div>
								<div class="degree">
                                <div class="num">Location Not Found</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<!-- Footer content -->
<?php
	$this->load->view('footer');
?>
<!-- /Footer content -->