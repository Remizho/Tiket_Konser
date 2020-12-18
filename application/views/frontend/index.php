<style>
input[type=number] {
  width: 100%;
  padding: 8px 20px;
  box-sizing: border-box;
}
</style>
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

			
	<?php foreach ($event as $key) { ?>
		
		<div class="col-lg-4 col-md-4 col-sm-6" style="margin-top:25px;">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
					<img src="<?=site_url()?>assets/img/<?php echo $key->gambar;?>" alt="image" class="img-responsive" style="height:350px;width:400px;margin-bottom: -35px">
					
					<!-- <form action="<?=site_url()?>index.php/frontend/booking/" id="yakin"> -->
						<?php  echo form_open('index.php/frontend/booking');?>
						<?php if($this->session->userdata('logged_in')) : ?>
						<input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'];?>">
						<?php endif; ?>
						<input type="hidden" name="id_event" value="<?php echo $key->id_event;?>">
						<input type="hidden" name="harga_satuan" value="<?php echo $key->harga_satuan;?>">
						<center><input type="number" name="tiket" placeholder="Jumlah tiket" required=""></center>
						<button type="submit" style="width:100%;border:none;text-decoration:none;" class="tm-green-gradient-bg tm-city-price-container">
							<span>
							Klik pesan<br>
							<?php echo $key->nama_event;?></span>
							<span>Rp. <?php echo $key->harga_satuan;?>
							<br>
							sisa tiket <?php echo $key->total_tiket;?></span>
						</button>
					</form>			
				</div>				
			</div>

	<?php }?>
			
		<!-- </div> -->
	</section>		
	
	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
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
	</section>