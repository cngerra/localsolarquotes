	<footer>
		<div class="white-bg margint30">
			<div class="container">
				<div class="text-center arial clear gray-text disclaimer">
					THIS WEBSITE IS NOT AFFILIATED WITH, AUTHORIZED, ENDORSED OR SPONSORED BY ANY OF THE CORPORATIONS, SERVICE PROVIDERS OR NEWS ORGANIZATIONS FEATURED. ALL GUIDES, ARTICLES, AND INFORMATION REGARDING PRODUCTS, SERVICES AND SERVICE PROVIDERS ARE PROVIDED FOR CONVENIENCE ONLY.
				</div>
			</div>
			<script>
				$(document).on('click','.consents-link', function() {
					var dataconsentsid = $(this).attr('data-consentsid');
					var url = '/'+dataconsentsid+'-modal.php';
					$('.'+dataconsentsid+'-modal-cont').load(url,function(result) {
						CenterModal(dataconsentsid+'-modal');
						$('#'+dataconsentsid+'-modal').modal({show:true});
					});
				});
				$('.fsd-link').click(function() {
					var dataid = $(this).attr('data-id');
					var url = '/fsd-'+dataid+'-copy.php';
					$('#fsd-'+dataid+'-box').load(url);
					$('#fsd-'+dataid).slideDown(50);
				});
			</script>	
		</div>	
		<div class="copyright-wrapper margint30 paddingtb15">	
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 pull-left">
						<p class="copyright marginb0">Copyright <?php echo date('Y'); ?> Expert Solar Help. All rights reserved.</p>
					</div>
					<div class="col-xs-12 col-md-6">
						<ul class="list-inline font0 marginb0">
							<li><a href="/privacy-policy" class="newwin">Privacy Policy</a></li>
							<li><a href="/terms-of-service" class="newwin">Terms of Service</a></li>
							<li><a href="/unsubscribe">Unsubscribe</a></li>
						</ul>
					</div>			
				</div>
			</div>
		</div>
	</footer>
	<div class="service-providers-modal-cont">
	</div>
	<div class="privacy-policy-modal-cont">
	</div>
	<div class="terms-modal-cont">
	</div>
<?php include 'site-noscript.php'; ?>
</body>
</html>
