<?php echo $this->Html->css('contact'); ?>
<?php echo $this->Html->css('contact_responsive'); ?>
<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>

		<!-- Header -->

    <div class="home_container page-internal">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Contato</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact form -->
				<div class="col-lg-8 contact_col">
					<div class="contact_form">
						<div class="contact_title">Get in touch</div>
						<div class="contact_form_container">
							<form action="#" id="contact_form" class="contact_form">
								<input type="text" id="contact_input" class="contact_input" placeholder="Your Name" required="required">
								<input type="email" id="contact_email" class="contact_input" placeholder="Your E-mail" required="required">
								<input type="text" id="contact_subject" class="contact_input" placeholder="Subject" required="required">
								<textarea class="contact_input contact_textarea" id="contact_textarea" placeholder="Message" required="required"></textarea>
								<button class="contact_button" id="contact_button">send message</button>
							</form>
						</div>
					</div>
				</div>

				<!-- Make an Appointment -->
				<div class="col-lg-4 contact_col">
					<div class="info_form_container">
						<div class="info_form_title">Make an Appointment</div>
						<form action="#" class="info_form" id="info_form">
							<select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
								<option>Department</option>
								<option>Department</option>
								<option>Department</option>
							</select>
							<select name="info_form_doc" id="info_form_doc" class="info_form_doc info_input info_select">
								<option>Doctor</option>
								<option>Doctor</option>
								<option>Doctor</option>
							</select>
							<input type="text" class="info_input" placeholder="Name" required="required">
							<input type="text" class="info_input" placeholder="Phone No">
							<button class="info_form_button">make an appointment</button>
						</form>
					</div>
				</div>

				<!-- contact info -->
				<div class="contact_info">
					<div class="row">
						<div class="col-lg-3 offset-lg-1">
							<div class="contact_info_list">
								<div class="contact_info_title">Contact Info</div>
								<ul>
									<li><span>Address: </span>Mitlton Str. 26-27 Gibraltar</li>
									<li><span>Email: </span>yourmail@gmail.com</li>
									<li><span>Phone: </span>+53 345 7953 32453</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="contact_info_list contact_info_list_2">
								<ul>
									<li><span>Address: </span>Mitlton Str. 26-27 London UK</li>
									<li><span>Email: </span>yourmail@gmail.com</li>
									<li><span>Phone: </span>+53 345 7953 32453</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="contact_info_list">
								<div class="contact_info_title">Opening Hours</div>
								<ul>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Monday-Thursday</div>
										<div class="ml-auto">8.00 - 19.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Friday</div>
										<div class="ml-auto">8.00 - 18.30</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Saturday</div>
										<div class="ml-auto">9.30 - 17.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Sunday</div>
										<div class="ml-auto">9.30 - 15.00</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Google Map -->

	<div class="contact_map">
		<!-- Google Map -->
		<div class="map">
			<div id="google_map" class="google_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.6449016343527!2d-53.31617240511726!3d-23.760039078896252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f2d402b45fe6cb%3A0x1eecb8117aa559fe!2sOdonto+Herrera!5e0!3m2!1spt-BR!2sbr!4v1550714219894" width="100%" height="732" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
