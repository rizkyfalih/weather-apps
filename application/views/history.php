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
							<li class="menu-item"><a href="<?php echo base_url(''); ?>">Home</a></li>
							<li class="menu-item current-menu-item"><a href="<?php echo base_url('history'); ?>">Daftar Kota</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<main class="main-content">
				<div class="container">
					<div class="breadcrumb">
						<a href="<?php echo base_url(''); ?>">Home</a>
						<span>Daftar Kota</span>
					</div>
				</div>

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
                        		<?php foreach ($lists as $list): ?>
								<div class="photo">
									<div class="photo-preview photo-detail" data-bg-image="<?php echo base_url(); ?>assets/images/city.png"></div>
									<div class="photo-details">
										<h3 class="photo-title"><a href="#"><?php echo $list->city;?></a></h3>
										<p>Searched on <?php echo $list->date;?></p>
									</div>
								</div>
                        		<?php endforeach;?>
							</div>
						</div>
					</div>
				</div>
				
			</main> <!-- .main-content -->

<!-- Footer content -->
<?php
	$this->load->view('footer');
?>
<!-- /Footer content -->