<?php 
	include 'header-html.php'; 
	include 'header.php';
?>
	<div class="def-page text-center margint20">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="box">
						<h1 class="h-1 source-sans-light">Unsubscribe from Expert Solar Help</h1>
						<form class="def-form unsubscribe-form margintb20">
							<div id="unsub-form-group">
								<span>Enter Your Email Address</span>
								<div class="form-group">
									<input class="form-control" name="email">
								</div>
								<button class="orange-btn-small btn-unsubscribe margint15">Submit</button>
							</div>
							<div style="display: none;" class="bg_success alert alert-success"></div>
						</form>
						<small>*If you wish to unsubscribe from third party advertiser offers you must unsubscribe directly with that third party advertiser via their web site, phone, email unsubscribe link.</small>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function()
	{
		function startLoading(button) {
			button.html('Processing <i class="fa fa-spinner fa-spin"></i>');
			button.addClass('disabled');
		}
		function endLoading(button, button_str) {
			button.html(button_str);
			button.removeClass('disabled');
		}

		$.validator.addMethod("emailRx", function (value, element) {
			return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
		});
		
		var msg = {
			email: "Enter your email address",
			thanksUnsub: "We're sad to see you go. Your email address will be removed shortly.",
		}

		$('.unsubscribe-form .btn-unsubscribe').click(function (e) 
		{
			$('.help-block').hide();
			$('.form-control').removeClass('has-error');

			var button = $(this);
			var button_str = button.html();

			startLoading(button);

			$('.bg_success').hide();
			$('.unsubscribe-form').validate({
				onkeyup: false,
				onfocusout: false,

				rules: {
					email: {
						required: true,
						emailRx: true
					},
				},
				messages: {
					email: {
						required: msg.email,
						emailRx: msg.email
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
						url: '/ajax/form-proc.php',
						async: false,
						data: $('.unsubscribe-form').serialize(),
						success: function(data) {
							var dataParsed = $.parseJSON(data);
							if (dataParsed.Error == 1) {
								$(".unsubscribe-form").validate().showErrors({"email" : msg.email});
									endLoading(button, button_str);
							}
							else {
								endLoading(button, button_str);
								$('#unsub-form-group').hide();
								$('.bg_success').text(msg.thanksUnsub).show();
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
				$('.unsubscribe-form').submit();
			}, 200);
			return false;
		});
	});
	</script>
<?php include 'footer.php'; ?>
