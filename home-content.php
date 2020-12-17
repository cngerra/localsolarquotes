	<div class="featured-list-wrapper paddingtb40">
		<div class="container">
			<div class="row">
				<div class="featured-list-inner">
					<div class="col-xs-12 col-sm-6 featured-list">
						<span class="margint0"><i class="fa fa-check"></i> Cut Your Electricity Bill By Up to 80%</span>
						<span><i class="fa fa-check"></i> Qualify for 0% Down Financing</span>
					</div>
					<div class="col-xs-12 col-sm-6 featured-list">
						<span><i class="fa fa-check"></i> Get Big Rebates and Tax incentives</span>
						<span><i class="fa fa-check"></i> Increase Your Home Value Significantly</span>					
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="benefits-wrapper paddingtb40 white-bg">
		<div class="container benefits text-center">
			<div class="row">
				<h2 class="h-2 gray-text">The Time is Right to Switch to Solar</h2>
				<div class="col-xs-12 col-md-4 text-center margint30 benefit fadeInEffect">
					<div class="in-benefit paddingtb20">
						<div class="benefit-img">
							<img src="/img/img-dontmiss.png" alt="Don't Miss Out on Rebates and Incentives">
						</div>
						<h4 class="h-4">Don't Miss Out on Rebates and Incentives</h4>
						<p class="margint15">Get a quote today and take advantage of the current federal solar tax credits before they expire. These incentive programs could save you thousands of dollars on solar system installation</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 text-center margint30 benefit fadeInEffect delay-15ms">
					<div class="in-benefit paddingtb20">
						<div class="benefit-img">
							<img src="/img/img-save-tens.png" alt="Save Tens of Thousands of Dollars">
						</div>
						<h4 class="h-4">Save Tens of Thousands of Dollars</h4>
						<p class="margint15">A solar powered system will save the typical American family an average of more than $30,000 over the course of a 20 year period, and increases the average home's value by up to $15,000</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 text-center margint30 benefit fadeInEffect delay-30ms">
					<div class="in-benefit paddingtb20">
						<div class="benefit-img">
							<img src="/img/img-clean.png" alt="Clean, Renewable and Efficient Energy">
						</div>
						<h4 class="h-4">Clean, Renewable and Efficient Energy</h4>
						<p class="margint15">Get Expert Solar Help and make the transition away from wasteful fossil fuels. Lead the charge in your neighborhood and help protect the future of our planet by switching to solar today</p>
					</div>
				</div>
				<span class="benefits-save-money source-sans-pro-bold margint45">Save Money, the Environment and Unnecessary Headaches. Go With the Experts.</span>
			</div>
		</div>	
	</section>
	<section class="solar-installation paddingtb40 blue-bg">
		<div class="container text-center fadeInEffect">
			<h2 class="h-2">Make the Most of Your Solar Installation</h2>
			<p class="marginb0">The late afternoon is when your home is the most power-hungry. Yet, most solar panels in the U.S. are inefficiently installed, facing south where they don't generate the as much power when you need it the most.</p>
			<span class="source-sans-pro-bold margint15">Get more out of your investment when your solar is installed by industry experts. </span>
		</div>
	</section>
	<section class="get-quote-now white-bg gray-text paddingtb40">
		<div class="container text-center">
			<h2 class="h-2">Ready to See How Much Money Solar Can Save You?</h2>
			<h3 class="h-3 lato-bold gray-text margint30">Get Your Free Quotes Now</h3>
			<span class="get-quote fadeInEffect"><a class="orange-btn btn-quote" href="#quotes">Sign Up Now</a></span>
			<script>
				$(document).ready(function(){	
					function wayPointEffect(theclass, effect, direction, offset){
						var arr_theclass = theclass;
						var arr_effect = effect;
						for(var x = 0; x<arr_theclass.length; x++){
							$(arr_theclass[x]).waypoint(function(direction) {
								for(var i = 0; i<arr_effect.length; i++){
									if(direction == direction) {
										$(this.element).addClass(arr_effect[i]);
										this.destroy();
									}
								}
							}, {
								offset: offset
							});
						}
					}

					wayPointEffect(new Array('.fadeInEffect'), new Array('animated', 'fadeIn'), 'down', '100%');
					wayPointEffect(new Array('.fadeInLeftEffect'), new Array('animated', 'fadeInLeft'), 'down', '100%');
					wayPointEffect(new Array('.fadeInRightEffect'), new Array('animated', 'fadeInRight'), 'down', '100%');

					$('a[href^="#"]').on('click',function (e) {
						var target = this.hash;

						if (target == '#quotes')
						{ 							
							var $target = $(target);
							$('html, body').stop().animate({
								'scrollTop': $(target).offset().top
							},1000, 'swing');							
							
							e.preventDefault();
							
							setTimeout(function(){
								$('#quotes input:first').focus();
							},1000);
						}
					}); 


					equalheight = function(container){

					var currentTallest = 0,
						currentRowStart = 0,
						rowDivs = new Array(),
						$el,
						topPosition = 0;
					 $('.in-benefit').each(function() {

						 $el = $(this);
						 $($el).height('auto')
						 topPostion = $el.position().top;

						 if (currentRowStart != topPostion) {
						for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
							rowDivs[currentDiv].height(currentTallest);
						}
						rowDivs.length = 0; // empty the array
						currentRowStart = topPostion;
						currentTallest = $el.height();
						rowDivs.push($el);
						 } else {
						rowDivs.push($el);
						currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
						}
						 for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
						rowDivs[currentDiv].height(currentTallest);
						 }
					 });
					}

					$(window).load(function() {
						equalheight('.in-benefit');
					});

					$(window).resize(function(){
						equalheight('.in-benefit');
					});

				});
			</script>
		</div>
	</section>
	<section class="testimonials-wrapper blue-bg paddingtb40">
		<div class="container">
			<h2 class="text-center h-2">What Home Owners Are Saying About Expert Solar Help</h2>
			<blockquote class="col-xs-12 col-md-6 testimonial-wrapper margint30 marginb0 fadeInEffect">
				<div class="testimonial">
					<div class="quotes-img">
						<img src="/img/testimonial-quote-mob.png" alt="" class="visible-xs">
						<img src="/img/testimonial-quote.png" alt="" class="hidden-xs">
					</div>
					<p>Expert Solar Help has saved me and my family thousands already. We're able to sell excess energy back to the grid and it feels great make a difference to the environment too.</p>
					<img src="/img/arrow-testimonial.png" alt="arrow" class="arrow-testimonial">
					<img src="/img/person1.png" alt="" class="testimonial-person-img">
				</div>
				<div class="testimonial-person">
					<span class="lato">Bryan Burns, California</span>
				</div>
			</blockquote>
			<blockquote class="col-xs-12 col-md-6 testimonial-wrapper margint30 marginb0 fadeInEffect delay-15ms">
				<div class="testimonial">
					<div class="quotes-img">
						<img src="/img/testimonial-quote-mob.png" alt="" class="visible-xs">
						<img src="/img/testimonial-quote.png" alt="" class="hidden-xs">
					</div>
					<p>When we decided to go solar we were overwhelmed by the mountain of paperwork involved. We got  Expert Solar Help and they made the process so easy, quick and hassle-free. We couldn't be happier!</p>
					<img src="/img/arrow-testimonial.png" alt="" class="arrow-testimonial">
					<img src="/img/person2.png" alt="" class="testimonial-person-img">
				</div>
				<div class="testimonial-person">
					<span class="lato">Samantha Flores, Texas</span>
				</div>
			</blockquote>
		</div>
	</section>
	<section class="got-question-wrapper white-bg paddingtb40">
		<div class="container">
			<h2 class="text-center h-2 gray-text">Got Questions? Ask the Experts.</h2>
			<form class="got-question-form margint30 fadeInEffect" id="got-question-form">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="first_name" id="first_name_got_q" placeholder="First Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="email" id="email_got_q" placeholder="Email Address">
							<span>We'll Never Send You Spam. Ever!</span>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="zip_code" id="zip_code_got_q" placeholder="Zip Code">
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
						<textarea class="form-control" placeholder="Message" name="message"></textarea>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-3 clear">
						<div class="alert alert-success success-message"></div>
					</div>
					<div class="col-xs-12">
						<div class="form-group-btn text-center">
							<button class="orange-btn btn-got-questions margint15" type="submit">Send</button>
						</div>
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

					$.validator.addMethod("nameRx", function (value, element) 
					{
						return this.optional(element) || /^[a-zA-Z.]+(?:[\s-][a-zA-Z.]+)*$/.test(value);
					});
					$.validator.addMethod("emailRx", function (value, element){
						return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
					});
					$.validator.addMethod("zipRx", function (value, element) 
					{
						return this.optional(element) || /^\d{5}$/.test(value);
					});
					$.validator.addMethod("messageRx", function (value, element) 
					{
						return this.optional(element) || /(\n|^).*?(?=\n|$)/.test(value);
					});
					$('#zip_code_got_q').mask('00000');
					var msg = {
						first_name : "Enter your first name",
						email_address : "Enter your email address",
						zip_code : "Enter your zip code",
						message : "Enter your message",
						success_message : "Your details have been successfully sent. Our team will contact you as soon as possible"
					}

					$(".btn-got-questions").click(function(e){
						$('.help-block').hide();
						$('.form-control').removeClass('has-error');

						var button = $(this);
						var button_str = button.html();

						startLoading(button);
						$(".got-question-form").validate({
							onkeyup: false,
							onfocusout: false,
							rules : {
								first_name : {
									nameRx : true,
									required : true
								},
								email : {
									emailRx: true,
									required : true
								},
								zip_code : {
									zipRx: true,
									required: true
								},
								message : {
									messageRx : true,
									required: true
								}
							},
							messages : {
								first_name : {
									nameRx : msg.first_name,
									required : msg.first_name,
								},
								email: {
									emailRx: msg.email_address,
									required: msg.email_address,
								},
								zip_code : {
									zipRx : msg.zip_code,
									required : msg.zip_code
								},
								message : {
									messageRx : msg.message,
									required : msg.message
								}
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
									data: $('#got-question-form').serialize(),
									success: function(data) 
									{
										var dataParsed = $.parseJSON(data);
										if (dataParsed.Error == 1) {
											$('#got-question-form').validate().showErrors({"first_name" : msg.first_name});
											endLoading(button, button_str);
										}else if (dataParsed.Error == 2) {
											$('#got-question-form').validate().showErrors({"email" : msg.email_address});
											endLoading(button, button_str);
										}else if (dataParsed.Error == 3) {
											$('#got-question-form').validate().showErrors({"zip_code" : msg.zip_code});
											endLoading(button, button_str);
										}else if (dataParsed.Error == 4) {
											$('#got-question-form').validate().showErrors({"message" : msg.message});
											endLoading(button, button_str);
										}
										else { 
											$('.success-message').text(msg.success_message).fadeIn(1000).fadeOut(10000, function(){$(this).hide().delay(5000);});
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
							$('#got-question-form').submit();
						}, 200);

						return false;
					});
				});
			</script>
		</div>		
	</section>