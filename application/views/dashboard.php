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

			<div class="hero" data-bg-image="<?php echo base_url(); ?>assets/images/cover.jpg">
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
								<span><?php echo round($forecast_location['consolidated_weather'][0]['min_temp'],0);?><sup>o</sup>/<?php echo round($forecast_location['consolidated_weather'][0]['max_temp'],0);?><sup>o</sup></span>
								<span><img src="<?php echo base_url(); ?>assets/images/icon-wind.png" alt=""><?php echo round($forecast_location['consolidated_weather'][0]['wind_speed'],0);?>km/h</span>
								<span><img src="<?php echo base_url(); ?>assets/images/icon-compass.png" alt=""><?php echo $forecast_location['consolidated_weather'][0]['wind_direction_compass'];?></span>
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
								<small><?php echo round($forecast_location['consolidated_weather'][1]['min_temp'],0);?><sup>o</sup>/<?php echo round($forecast_location['consolidated_weather'][1]['max_temp'],0);?><sup>o</sup></small>
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
								<small><?php echo round($forecast_location['consolidated_weather'][2]['min_temp'],0);?><sup>o</sup>/<?php echo round($forecast_location['consolidated_weather'][2]['max_temp'],0);?><sup>o</sup></small>
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
								<small><?php echo round($forecast_location['consolidated_weather'][3]['min_temp'],0);?><sup>o</sup>/<?php echo round($forecast_location['consolidated_weather'][3]['max_temp'],0);?><sup>o</sup></small>
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
								<small><?php echo round($forecast_location['consolidated_weather'][4]['min_temp'],0);?><sup>o</sup>/<?php echo round($forecast_location['consolidated_weather'][4]['max_temp'],0);?><sup>o</sup></small>
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
								<small><?php echo round($forecast_location['consolidated_weather'][5]['min_temp'],0);?><sup>o</sup>/<?php echo round($forecast_location['consolidated_weather'][5]['max_temp'],0);?><sup>o</sup></small>
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
