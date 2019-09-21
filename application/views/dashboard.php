<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Compass Starter by Ariona, Rian</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>assets/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">

	</head>


	<body>
		
		<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" class="branding">
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
							<li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="news.html">News</a></li>
							<li class="menu-item"><a href="live-cameras.html">Live cameras</a></li>
							<li class="menu-item"><a href="photos.html">Photos</a></li>
							<li class="menu-item"><a href="contact.html">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<div class="hero" data-bg-image="<?php echo base_url(); ?>assets/images/banner.png">
				<div class="container">
					<form action="#" class="find-location">
						<input type="text" placeholder="Find your location...">
						<input type="submit" value="Find">
					</form>

				</div>
			</div>
			<div class="forecast-table">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
							<div class="forecast-header">
								<div class="day"><?php echo date("l", strtotime($forecast_location['consolidated_weather'][0]['applicable_date']));?></div>
								<div class="date"><?php echo date("d F", strtotime($forecast_location['consolidated_weather'][0]['applicable_date']));?></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location"><?php echo $current_location[0]['title'];?></div>
								<div class="degree">
									<div class="num"><?php echo round($forecast_location['consolidated_weather'][0]['the_temp'],0);?><sup>o</sup>C</div>
									<div class="forecast-icon">
										<?php
											if ($forecast_location['consolidated_weather'][0]['weather_state_abbr'] == 'lc'){
												echo '<img src="'.base_url().'assets/images/icons/icon-3.svg" alt="" width=90>';
											} elseif ($forecast_location['consolidated_weather'][0]['weather_state_abbr'] == 'sl') {
												echo '<img src="'.base_url().'assets/images/icons/icon-14.svg" alt="" width=90>';
											} elseif ($forecast_location['consolidated_weather'][0]['weather_state_abbr'] == 't') {
												echo '<img src="'.base_url().'assets/images/icons/icon-12.svg" alt="" width=90>';
											} elseif ($forecast_location['consolidated_weather'][0]['weather_state_abbr'] == 'hr') {
												echo '<img src="'.base_url().'assets/images/icons/icon-10.svg" alt="" width=90>';
											} elseif ($forecast_location['consolidated_weather'][0]['weather_state_abbr'] == 'lr') {
												echo '<img src="'.base_url().'assets/images/icons/icon-9.svg" alt="" width=90>';
											} elseif ($forecast_location['consolidated_weather'][0]['weather_state_abbr'] == 's') {
												echo '<img src="'.base_url().'assets/images/icons/icon-4.svg" alt="" width=90>';
											} elseif ($forecast_location['consolidated_weather'][0]['weather_state_abbr'] == 'hc') {
												echo '<img src="'.base_url().'assets/images/icons/icon-6.svg" alt="" width=90>';
											} elseif ($forecast_location['consolidated_weather'][0]['weather_state_abbr'] == 'sn') {
												echo '<img src="'.base_url().'assets/images/icons/icon-13.svg" alt="" width=90>';
											} elseif ($forecast_location['consolidated_weather'][0]['weather_state_abbr'] == 'c') {
												echo '<img src="'.base_url().'assets/images/icons/icon-2.svg" alt="" width=90>';
											}
										?>
									</div>	
								</div>
								<span><img src="images/icon-umberella.png" alt="">20%</span>
								<span><img src="images/icon-wind.png" alt="">18km/h</span>
								<span><img src="images/icon-compass.png" alt="">East</span>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day"><?php echo date("l", strtotime($forecast_location['consolidated_weather'][1]['applicable_date']));?></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
										<?php
											if ($forecast_location['consolidated_weather'][1]['weather_state_abbr'] == 'lc'){
												echo '<img src="'.base_url().'assets/images/icons/icon-3.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][1]['weather_state_abbr'] == 'sl') {
												echo '<img src="'.base_url().'assets/images/icons/icon-14.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][1]['weather_state_abbr'] == 't') {
												echo '<img src="'.base_url().'assets/images/icons/icon-12.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][1]['weather_state_abbr'] == 'hr') {
												echo '<img src="'.base_url().'assets/images/icons/icon-10.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][1]['weather_state_abbr'] == 'lr') {
												echo '<img src="'.base_url().'assets/images/icons/icon-9.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][1]['weather_state_abbr'] == 's') {
												echo '<img src="'.base_url().'assets/images/icons/icon-4.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][1]['weather_state_abbr'] == 'hc') {
												echo '<img src="'.base_url().'assets/images/icons/icon-6.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][1]['weather_state_abbr'] == 'sn') {
												echo '<img src="'.base_url().'assets/images/icons/icon-13.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][1]['weather_state_abbr'] == 'c') {
												echo '<img src="'.base_url().'assets/images/icons/icon-2.svg" alt="" width=60>';
											}
										?>
								</div>
								<div class="degree"><?php echo round($forecast_location['consolidated_weather'][1]['the_temp'],0);?><sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day"><?php echo date("l", strtotime($forecast_location['consolidated_weather'][2]['applicable_date']));?></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
										<?php
											if ($forecast_location['consolidated_weather'][2]['weather_state_abbr'] == 'lc'){
												echo '<img src="'.base_url().'assets/images/icons/icon-3.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][2]['weather_state_abbr'] == 'sl') {
												echo '<img src="'.base_url().'assets/images/icons/icon-14.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][2]['weather_state_abbr'] == 't') {
												echo '<img src="'.base_url().'assets/images/icons/icon-12.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][2]['weather_state_abbr'] == 'hr') {
												echo '<img src="'.base_url().'assets/images/icons/icon-10.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][2]['weather_state_abbr'] == 'lr') {
												echo '<img src="'.base_url().'assets/images/icons/icon-9.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][2]['weather_state_abbr'] == 's') {
												echo '<img src="'.base_url().'assets/images/icons/icon-4.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][2]['weather_state_abbr'] == 'hc') {
												echo '<img src="'.base_url().'assets/images/icons/icon-6.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][2]['weather_state_abbr'] == 'sn') {
												echo '<img src="'.base_url().'assets/images/icons/icon-13.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][2]['weather_state_abbr'] == 'c') {
												echo '<img src="'.base_url().'assets/images/icons/icon-2.svg" alt="" width=60>';
											}
										?>
								</div>
								<div class="degree"><?php echo round($forecast_location['consolidated_weather'][2]['the_temp'],0);?><sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day"><?php echo date("l", strtotime($forecast_location['consolidated_weather'][3]['applicable_date']));?></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
										<?php
											if ($forecast_location['consolidated_weather'][3]['weather_state_abbr'] == 'lc'){
												echo '<img src="'.base_url().'assets/images/icons/icon-3.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][3]['weather_state_abbr'] == 'sl') {
												echo '<img src="'.base_url().'assets/images/icons/icon-14.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][3]['weather_state_abbr'] == 't') {
												echo '<img src="'.base_url().'assets/images/icons/icon-12.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][3]['weather_state_abbr'] == 'hr') {
												echo '<img src="'.base_url().'assets/images/icons/icon-10.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][3]['weather_state_abbr'] == 'lr') {
												echo '<img src="'.base_url().'assets/images/icons/icon-9.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][3]['weather_state_abbr'] == 's') {
												echo '<img src="'.base_url().'assets/images/icons/icon-4.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][3]['weather_state_abbr'] == 'hc') {
												echo '<img src="'.base_url().'assets/images/icons/icon-6.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][3]['weather_state_abbr'] == 'sn') {
												echo '<img src="'.base_url().'assets/images/icons/icon-13.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][3]['weather_state_abbr'] == 'c') {
												echo '<img src="'.base_url().'assets/images/icons/icon-2.svg" alt="" width=60>';
											}
										?>
								</div>
								<span/>
								<span/>
								<div class="degree"><?php echo round($forecast_location['consolidated_weather'][3]['the_temp'],0);?><sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day"><?php echo date("l", strtotime($forecast_location['consolidated_weather'][4]['applicable_date']));?></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
										<?php
											if ($forecast_location['consolidated_weather'][4]['weather_state_abbr'] == 'lc'){
												echo '<img src="'.base_url().'assets/images/icons/icon-3.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][4]['weather_state_abbr'] == 'sl') {
												echo '<img src="'.base_url().'assets/images/icons/icon-14.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][4]['weather_state_abbr'] == 't') {
												echo '<img src="'.base_url().'assets/images/icons/icon-12.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][4]['weather_state_abbr'] == 'hr') {
												echo '<img src="'.base_url().'assets/images/icons/icon-10.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][4]['weather_state_abbr'] == 'lr') {
												echo '<img src="'.base_url().'assets/images/icons/icon-9.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][4]['weather_state_abbr'] == 's') {
												echo '<img src="'.base_url().'assets/images/icons/icon-4.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][4]['weather_state_abbr'] == 'hc') {
												echo '<img src="'.base_url().'assets/images/icons/icon-6.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][4]['weather_state_abbr'] == 'sn') {
												echo '<img src="'.base_url().'assets/images/icons/icon-13.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][4]['weather_state_abbr'] == 'c') {
												echo '<img src="'.base_url().'assets/images/icons/icon-2.svg" alt="" width=60>';
											}
										?>
								</div>
								<div class="degree"><?php echo round($forecast_location['consolidated_weather'][4]['the_temp'],0);?><sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day"><?php echo date("l", strtotime($forecast_location['consolidated_weather'][5]['applicable_date']));?></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
										<?php
											if ($forecast_location['consolidated_weather'][5]['weather_state_abbr'] == 'lc'){
												echo '<img src="'.base_url().'assets/images/icons/icon-3.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][5]['weather_state_abbr'] == 'sl') {
												echo '<img src="'.base_url().'assets/images/icons/icon-14.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][5]['weather_state_abbr'] == 't') {
												echo '<img src="'.base_url().'assets/images/icons/icon-12.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][5]['weather_state_abbr'] == 'hr') {
												echo '<img src="'.base_url().'assets/images/icons/icon-10.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][5]['weather_state_abbr'] == 'lr') {
												echo '<img src="'.base_url().'assets/images/icons/icon-9.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][5]['weather_state_abbr'] == 's') {
												echo '<img src="'.base_url().'assets/images/icons/icon-4.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][5]['weather_state_abbr'] == 'hc') {
												echo '<img src="'.base_url().'assets/images/icons/icon-6.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][5]['weather_state_abbr'] == 'sn') {
												echo '<img src="'.base_url().'assets/images/icons/icon-13.svg" alt="" width=60>';
											} elseif ($forecast_location['consolidated_weather'][5]['weather_state_abbr'] == 'c') {
												echo '<img src="'.base_url().'assets/images/icons/icon-2.svg" alt="" width=60>';
											}
										?>
								</div>
								<div class="degree"><?php echo round($forecast_location['consolidated_weather'][5]['the_temp'],0);?><sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
					</div>
				</div>
			</div>

			<footer class="site-footer">
				<div class="container">
					<p class="colophon">Copyright 2019. All rights reserved</p>
				</div>
			</footer> <!-- .site-footer -->
		</div>
		
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
		
	</body>

</html>