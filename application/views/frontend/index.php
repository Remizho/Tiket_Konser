<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
			<?php if($this->session->flashdata('user_registered')): ?>
			<?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
			<?php endif; ?>

			<?php if($this->session->flashdata('user_loggedin')): ?>
			<?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
			<?php endif; ?>

			<?php if($this->session->flashdata('user_loggedout')): ?>
			<?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
			<?php endif; ?>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">PSCS <span class="tm-yellow-text">SMAN 3</span> MALANG</h1>
					<p class="tm-banner-subtitle">Jazz For Your Life</p>
					<a href="#more" class="tm-banner-link">Lihat Acara</a>	
				</div>
				<img src="<?=site_url()?>assets/frontend/img/banner-1.jpg" alt="Image" />	
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title"><span class="tm-yellow-text"> KICKFEST </span>MALANG</h1>
					<p class="tm-banner-subtitle">For Your Cloth</p>
					<a href="#more" class="tm-banner-link">Lihat Acara</a>	
				</div>
		      <img src="<?=site_url()?>assets/frontend/img/banner-2.jpg" alt="Image" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title"><span class="tm-yellow-text">KSSH</span> MALANG</h1>
					<p class="tm-banner-subtitle">Ceriakan Duniamu Dengan Music</p>
					<a href="#more" class="tm-banner-link">Lihat Acara</a>	
				</div>
		      <img src="<?=site_url()?>assets/frontend/img/banner-3.jpg" alt="Image" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title"><span class="tm-yellow-text">CRESTA</span> MALANG</h1>
					<p class="tm-banner-subtitle">Ceriakan Duniamu Dengan Dansa</p>
					<a href="#more" class="tm-banner-link">Lihat Acara</a>	
				</div>
		      <img src="<?=site_url()?>assets/frontend/img/banner-3.jpg" alt="Image" />
		    </li>
		  </ul>
		</div>	
	</section>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<!-- <div class="row"> -->
			
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
					<img src="<?=site_url()?>assets/frontend/img/index-01.jpg" alt="image" class="img-responsive">
					<a href="#">
						<div class="tm-yellow-gradient-bg tm-city-price-container">
							<span>Kickfest</span>
							<span>Rp70.000</span>
						</div>	
					</a>			
				</div>				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
					<img src="<?=site_url()?>assets/frontend/img/index-01.jpg" alt="image" class="img-responsive">
					<a href="#">
						<div class="tm-green-gradient-bg tm-city-price-container">
							<span>KSSH Malang</span>
							<span>Rp40.000</span>
						</div>	
					</a>			
				</div>				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-right">
					<img src="<?=site_url()?>assets/frontend/img/index-02.jpg" alt="image" class="img-responsive">
					<a href="#">
						<div class="tm-red-gradient-bg tm-city-price-container">
							<span>PSCS Malang</span>
							<span>Rp65.000</span>
						</div>	
					</a>					
				</div>				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6" style="margin-top: 20px; margin-left: -3px">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-right">
					<img src="<?=site_url()?>assets/frontend/img/index-02.jpg" alt="image" class="img-responsive">
					<a href="#">
						<div class="tm-red-gradient-bg tm-city-price-container">
							<span>CRESTA Malang</span>
							<span>Rp50.000</span>
						</div>	
					</a>					
				</div>				
			</div>


		<!-- </div> -->
	</section>		
	
	<!-- white bg -->
	<!-- <section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Review Acara</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>
				<div class="col-lg-6">
					<div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="<?=site_url()?>assets/frontend/img/index-07.jpg" alt="image" class="img-responsive">	
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description">Proin gravida nibhvell velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum</p>
					        <div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Detail</span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
						</div>						
					</div>					
			     </div>
			     <div class="col-lg-6">
			        <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="<?=site_url()?>assets/frontend/img/index-08.jpg" alt="image" class="img-responsive">	
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description">Proin gravida nibhvell velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum</p>
					        <div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Travel</span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
						</div>						
					</div>
				</div>
				<div class="col-lg-6">
				    <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="<?=site_url()?>assets/frontend/img/index-09.jpg" alt="image" class="img-responsive">	
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description">Proin gravida nibhvell velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum</p>
					        <div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Travel</span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
						</div>						
					</div>
			    </div>
			    
			</div>		
		</div>
	</section> -->