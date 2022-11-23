<!DOCTYPE html>
<?php include('includes/head.php')?>
  <body>

  <?php include("includes/header.php")?>
    <!-- Second container -->

   <div class="hero-wrap" id="content-mobile">
    <img src="images/contact_us.jpg" height="200px" width="100%">
    </div>
    <section class="hero-wrap hero-wrap-2" id="content-desktop">
    	<img src="images/contact_us.jpg" height="400px" width="100%">
      <div class="overlay"></div>
    
    </section>
   
   	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-8">
						<!-- <div id="map" class="map"></div> -->
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=13550%20rue%20turcot,%20Mirabel,%20Quebec,%20Canada+(%20blacksheepeventhouse)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" allowfullscreen></iframe>
						</div>
    			</div>
    			<div class="col-md-4 p-4 p-md-5 bg-white">
    			</br>
    				<h2 class="font-weight-bold mb-4">Check Available Dates</h2>
    			</br>
    				<p>Check our AirBnb Calender to see if the date you would like to request booking for is available. If available you can book on AirBnb or make use of our special prices by booking directly with us!</p>
    			</br>
    				<p><a href="https://www.airbnb.ca/rooms/49062148?locale=en&_set_bev_on_new_domain=1636918939_MWU5NjM4OTdkMjNm&source_impression_id=p3_1657996911_fh9xszMR9fcfb%2BUN#availability-calendar" class="btn btn-primary">Check Calender</a></p>
    			</div>
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-lg-8 col-md-7 d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4" id="contact-wrapper">
										<h3 class="mb-4">Get in touch</h3>
										<div id="form-message-warning" class="mb-4"></div> 
					      		<!-- <div id="form-message-success" class="mb-4">
					            Your message was sent, thank you!
									</div> -->
										<form method="POST" id="contactForm" name="contactForm" class="contactForm" action="https://script.google.com/macros/s/AKfycbxhQoLZxC8rNxN6BXoKqT8bjumniftaQ7JVomMLe89TpIzYR2rpOnwYEXBzqcM4SLMYAw/exec">
											<!-- <input type="hidden" class="form-control" id="mailto" value="blacksheepeventhouse@gmail.com"> -->
											<input type="hidden" class="form-control" name="emailtype" id="emailtype" value="contact">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Full Name</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Name">
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="email">Email Address</label>
														<input type="email" class="form-control" name="mailfrom" id="mailfrom" placeholder="Email">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">Subject</label>
														<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Message</label>
														<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
													</div>
												</div>
												<div class="col-md-12">
												<div class="g-recaptcha"
													data-sitekey="6LfciCUjAAAAAOgp6mqTQQLC5zuuVujIp6351gYH"></div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Send Message" class="btn btn-primary" id="btnSendMail">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-md-5 p-4">
										<h3>Let's get in touch</h3>
										<p class="mb-4">We're open for any suggestion or just to have a chat</p>
					        	<div class="dbox w-100 d-flex align-items-start">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-map-marker"></span>
					        		</div>
					        		<div class="text pl-3">
						    <p><span>Address:</span> <p>13550 Rue Turcot, Mirabel, QC J7J 1H7, Canada</p></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-phone"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>AirBnb:</span> <a href="tel://1234567920"><p>wwww.airbnb.com/h/event-house</p></a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Email:</span> <a href="mailto:blacksheepeventhouse@gmail.com">blacksheepeventhouse@gmail.com</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-globe"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Website</span> <a href="#">www.13lacksheep.com</a></p>
						          </div>
					          </div>
				          </div>
								</div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>
		
 <?php include("includes/footer.php")?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<?php include("includes/scripts.php");?>
    
  </body>
</html>
