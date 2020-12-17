<?php 
	include 'header-html.php'; 
?>
	<main class="top-content">
		<section class="first-form">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 top-content-left">
						<div class="logo">
							<img src="/img/logo.png" width="175" height="77" class="img-responsive" alt="Expert Solar Help">
						</div>
						<div class="first-form-text">
							<h3 class="h-3">Get Your Solar Installation Done Right!</h3>
							<h1 class="h-1">Free Quotes from the Experts</h1>
							<p class="marginb0">Expert Solar Help matches you with the premier solar installers in your area. These experts are trained to perfect your solar installation with your home's unique needs. If you're looking  for the best, look no further. Accept no substitutes. Get Solar with The Experts!</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 free-solar_quotes">
						<div class="quotes" id="quotes">
							<div class="quotes-top-content text-center">
								<h1 class="lato-light h-1">Free Solar Quotes</h1>
								<h2 class="h-2">From North Carolina's Best Installers</h2>
							</div>
							<form class="free-solar-quotes-form paddingtb20" id="free-solar-quotes-form">
								<div class="form-group">
									<input type="text" class="form-control" name="street_address" id="street_address" placeholder="Street Address">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="Enter Your Zip Code">
								</div>
								<div class="form-group">
									<select name="monthly_electric_bill" class="form-control" id="monthly_electric_bill">
										<option hidden=""  value="-1">Monthly Electricity Bill</option>										
										<option value="25">$0 - $49</option>
										<option value="75">$51 - $99</option>
										<option value="125">$100 - $149</option>
										<option value="175">$150 - $199</option>
										<option value="225">$200 - $249</option>
										<option value="275">$250 - $299</option>
										<option value="325">$300 - $349</option>
										<option value="375">$350 - $399</option>
										<option value="425">$400 - $449</option>
										<option value="475">$450 - $499</option>
										<option value="525">$500 - $549</option>
										<option value="575">$550 - $599</option>
										<option value="625">$600 - $649</option>
										<option value="675">$650 - $699</option>
										<option value="725">$700 - $749</option>
										<option value="775">$750 - $799</option>
									</select>
								</div>
								<div class="form-group">
									<select name="electric_provider" class="form-control" id="electric_provider">
										<option hidden=""  value="-1">Electricity Provider</option>
										<option value="Electricity Provider2">Electricity Provider2</option>
										<option value="Electricity Provider3">Electricity Provider3</option>
									</select>
								</div>
								<div class="form-group">
									<select name="typeofhome" class="form-control" id="typeofhome">
										<option hidden=""  value="-1">Type of Home</option>
										<option value="Single Family House">Single Family House</option>
										<option value="Townhouse">Townhouse</option>
										<option value="Condo">Condo</option>
										<option value="Mobile Home">Mobile Home</option>
										<option value="Other">Other</option>
									</select>
								</div>
								<div class="form-group">
									<select name="homeowner_status" class="form-control" id="homeowner_status">
										<option hidden=""  value="-1">Homeowner</option>
										<option value="Y">Yes</option>
										<option value="N">No</option>
									</select>
								</div>
								<div class="form-group">
									<select name="roof_shade" class="form-control" id="roof_shade">
										<option hidden=""  value="-1">Roof Shade</option>
										<option value="No Shade">No Shade</option>
										<option value="Little Shade">Little Shade</option>
										<option value="Uncertain">Uncertain</option>
									</select>
								</div>
								<div class="text-center submit-btn-wrapper">
									<button class="orange-btn btn-quote margint15" id="solar-quotes-form-btn">Get Quotes</button>
									<div class="clear margint15">								
										<i class="fa fa-lock"></i> Your information is secure.
									</div>
								</div>
							</form>
							<script>
									function startLoading(button) {
										button.html('Processing <i class="fa fa-spinner fa-spin"></i>');
										button.addClass('disabled');
									}
									function endLoading(button, button_str) {
										button.html(button_str);
										button.removeClass('disabled');
									}
								$(document).ready(function(){

									$.validator.addMethod("zipRx", function (value, element){
										return this.optional(element) || /^\d{5}$/.test(value);
									});

									$.validator.addMethod("selectBoxRx", function (value, element){
										return this.optional(element) || /[^-1]/.test(value);
									});

									$('#zip_code').mask('00000');

									var msg = {
										street_address : "Enter your street address",
										zip_code : "Enter your zip code",
										monthly_electric_bill : "Select your monthly electricity bill",
										electric_provider : "Select your electricity provider",
										homeowner_status : "Select your home owner status",
										typeofhome : "Select your type of home",
										roof_shade : "Select your roof shade"
									}
									$('#solar-quotes-form-btn').click(function (e){
										$('.help-block').hide();
										$('.form-control').removeClass('has-error');

										var button = $(this);
										var button_str = button.html();

										startLoading(button);

										$('#free-solar-quotes-form').validate({
											onkeyup: false,
											onfocusout: false,
											onclick: false,
											rules : {
												street_address : {
													required : true
												},
												zip_code : {
													zipRx : true,
													required : true
												},
												monthly_electric_bill : 
												 {
													selectBoxRx : true,
													required : true
												},
												electric_provider : {
													selectBoxRx : true,
													required : true
												},
												homeowner_status : {
													selectBoxRx : true,
													required : true
												},
												typeofhome : {
													selectBoxRx : true,
													required : true
												},
												roof_shade : {
													selectBoxRx : true,
													required : true
												},
											},
											messages : {
												street_address : {
													required : msg.street_address
												},
												zip_code : {
													zipRx : msg.zip_code,
													required : msg.zip_code
												},
												monthly_electric_bill : {
													selectBoxRx : msg.monthly_electric_bill,
													required :  msg.monthly_electric_bill
												},
												electric_provider : {
													selectBoxRx : msg.electric_provider,
													required : msg.electric_provider
												},
												homeowner_status : {
													selectBoxRx : msg.homeowner_status,
													required : msg.homeowner_status
												},
												typeofhome : {
													selectBoxRx : msg.typeofhome,
													required : msg.typeofhome
												},
												roof_shade : {
													selectBoxRx : msg.roof_shade,
													required : msg.roof_shade
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
													success: function(data) {
														var dataParsed = $.parseJSON(data);
														if(dataParsed.Error == 1){
															$('#free-solar-quotes-form').validate().showErrors({"street_address" : msg.street_address});
															endLoading(button, button_str);
														}else if (dataParsed.Error == 2) {
															$('#free-solar-quotes-form').validate().showErrors({"zip_code" : msg.zip_code});
															endLoading(button, button_str);
														}else if (dataParsed.Error == 3) {
															$('#free-solar-quotes-form').validate().showErrors({"monthly_electric_bill" : msg.monthly_electric_bill});
															endLoading(button, button_str);
														}else if (dataParsed.Error == 4) {
															$('#free-solar-quotes-form').validate().showErrors({"electric_provider" : msg.electric_provider});
															endLoading(button, button_str);
														}else if (dataParsed.Error == 5) {
															$('#free-solar-quotes-form').validate().showErrors({"homeowner_status" : msg.homeowner_status});
															endLoading(button, button_str);
														}else if (dataParsed.Error == 6) {
															$('#free-solar-quotes-form').validate().showErrors({"typeofhome" : msg.typeofhome});
															endLoading(button, button_str);
														}else if (dataParsed.Error == 7) {
															$('#free-solar-quotes-form').validate().showErrors({"roof_shade" : msg.roof_shade});
															endLoading(button, button_str);
														}else{
															window.location = '/final-step';
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