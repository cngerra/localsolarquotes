<?php 
	include 'header-html.php'; 
?>
	<main class="top-content">
		<section class="final-form">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 top-content-left">
						<div class="logo"><img src="/img/logo.png" alt=""></div>
						<div class="final-form_text">
							<h1 class="h-1">Save Money, Time and the Environment with Expert Solar Help</h1>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 free-solar_quotes">
						<div class="quotes" id="quotes">
							<div class="quotes-top-content text-center">
								<h1 class="lato-light h-1">Free Solar Quotes</h1>
								<h2 class="h-2">From North Carolina's Best Installers</h2>
							</div>
							<form class="free-solar-quotes-form paddingtb20" id="free-solar-quotes-form">
								<div class="solar-form-final">
									<div class="form-group">
									<img src="/img/final-step-img.png" class="final-step-img hidden-xs" alt="Final Step">
										<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number">
										<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" title="We request your phone number so that our network of premier home security providers can fulfill your request for home security quotes."></i>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="email_address" id="email_address" placeholder="Email Address">
										<span class="text-center span-final-form">We'll Never Send You Spam. Ever!</span>
										<i class="fa fa-question-circle" data-toggle="tooltip" data-placement="left" title="We request your email address so that we can communicate with you about your home solar quotes request as well other subjects pertinent to home owners. No spam. Ever."></i>
									</div>
									<div class="text-center">
										<button class="orange-btn btn-quote margint15" id="solar_quotes_form_btn">Get Quotes Now</button>
									</div>
								</div>
								<div class="text-center">
									<div class="disclaimer margint25">
										This site is compliant with the Telephone Consumer Protection Act as implemented by the Federal Communications Commission. By clicking "Get Quotes Now" I agree by electronic signature to authorize Expert Solar Help by HomeBaseHelper and its network of <a data-consentsid="service-providers" class="consents-link">service providers</a> to contact me at the telephone or mobile number you entered using automated telephone technology including auto-dialers, pre-recorded messages and text message, even if my telephone or mobile number is currently listed on any state, federal or corporate "Do Not Call" list. Additionally, I agree to this sites <a data-consentsid="terms" class="consents-link">Terms of Service</a> and <a data-consentsid="privacy-policy" class="consents-link">Privacy Policy</a>. Consent is not required as a condition of purchase.
									</div>
								</div>
							</form>
							<script>
								$(document).ready(function () {

									function startLoading(button) {
										button.html('Processing <i class="fa fa-spinner fa-spin"></i>');
										button.addClass('disabled');
									}
									function endLoading(button, button_str) {
										button.html(button_str);
										button.removeClass('disabled');
									}
									
									$('[data-toggle="tooltip"]').tooltip();

									$.validator.addMethod("nameRx", function (value, element) 
									{
										return this.optional(element) || /^[a-zA-Z.]+(?:[\s-][a-zA-Z.]+)*$/.test(value);
									});

									$.validator.addMethod("phoneRx", function (value, element) 
									{
										value = value.replace(/[-\ \)\(]/g, '');
										return this.optional(element) || /^\d{10}$/.test(value);
									});

									$.validator.addMethod("emailRx", function (value, element) 
									{
										return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
									});


									$('#phone_number').mask('(000) 000-0000');

									var msg = {
										first_name : "Enter your first name",
										last_name : "Enter your last name",
										phone_number : "Enter your phone number",
										email_address : "Enter your email address"
									}

									$('#solar_quotes_form_btn').click(function(e){
										$('.help-block').hide();
										$('.form-control').removeClass('has-error');

										var button = $(this);
										var button_str = button.html();

										startLoading(button);
										$('#free-solar-quotes-form').validate({
											onkeyup: false,
											onfocusout: false,
											rules : {
												first_name : {
													nameRx : true,
													required : true
												},
												last_name : {
													nameRx : true,
													required : true
												},
												phone_number : {
													phoneRx : true,
													required : true
												},
												email_address : {
												 	emailRx : true,
													required : true
												},
											},
											messages : {
												first_name : {
													nameRx : msg.first_name,
													required : msg.first_name
												},
												last_name : {
													nameRx : msg.last_name,
													required : msg.last_name
												},
												phone_number : {
													phoneRx : msg.phone_number,
													required : msg.phone_number
												},
												email_address : {
												 	emailRx : msg.email_address,
													required : msg.email_address
												},
											},
											highlight: function(element) {
												$(element).addClass('has-error');
											},
											unhighlight: function(element) {
												$(element).removeClass('has-error');
											},
											errorElement: 'p',
											errorClass: 'help-block',
											errorPlacement: function(error, element) {
												error.insertAfter(element);
											},
											submitHandler: function(form) {
												$.ajax({
													type: 'POST',
													url: '/ajax/form-proc',
													async: false,
													data: $('#free-solar-quotes-form').serialize(),
													success: function(data) 
													{
														var dataParsed = $.parseJSON(data);
														if (dataParsed.Error == 1) {
															$('#free-solar-quotes-form').validate().showErrors({"first_name" : msg.first_name});
															endLoading(button, button_str);
														}
														else if (dataParsed.Error == 2) {
															$('#free-solar-quotes-form').validate().showErrors({"last_name" : msg.last_name});
															endLoading(button, button_str);
														}
														else if (dataParsed.Error == 3) {
															$('#free-solar-quotes-form').validate().showErrors({"phone_number" : msg.phone_number});
															endLoading(button, button_str);
														}
														else if (dataParsed.Error == 4) {
															$('#free-solar-quotes-form').validate().showErrors({"email_address" : msg.email_address});
															endLoading(button, button_str);
														}
														else {
															window.open('/processing');
															window.location = '/special-home-owner-offers';
														}
													},
													error: function(data) {
														endLoading(button, button_str);
													},
												});
												return false;
											},
											invalidHandler: function() {
												endLoading(button, button_str);
											},
										});
										setTimeout(function() {
											$('#free-solar-quotes-form').submit();
										}, 200);
										return false;
									});
								});
							</script>
						</div>
					</div>
			    </div>
		    </div>
		</section>
	</main>
<?php 
	include 'home-content.php';
	include 'footer.php'; 
?>