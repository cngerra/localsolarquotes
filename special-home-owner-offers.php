<?php 
	include 'header-html.php'; 
	include 'header.php'; 

	$Offers = array();
	$Offers[] = array(
		'img_url' 		=> '/img/offer-logos/ffg.png',
		'img_width' 	=> '289',
		'img_height' 	=> '38',
		'header_copy' 	=> 'Grant Money is Given for Almost Any Need',
		'offer_copy' 	=> 'Right now, you may be eligible to receive up to $50,000 in grant money. Even if you have bad credit, as a tax payer and US citizen, you are entitled to apply!',
		'offer_link'	=> 'http://dmclix.com/c/6894/56346/?sid=LIHH_OR_HP_W&amp;trx=17600173',
	);
	$Offers[] = array(
		'img_url' 		=> '/img/offer-logos/hiddenlistings.png',
		'img_width' 	=> '319',
		'img_height' 	=> '123',
		'header_copy' 	=> 'Why Rent When You Can Rent-To-Own?',
		'offer_copy' 	=> 'Tired of throwing your money away on monthly rent but don\'t have good enough credit to buy? Learn more about Rent-To-Own now!',
		'offer_link'	=> 'http://th7t.com/c/55877/56346/?sid=LIHH_OR_HP_W&amp;trx=17600173',
	);
	$Offers[] = array(
		'img_url' 		=> '/img/offer-logos/nssd.png',
		'img_width' 	=> '272',
		'img_height' 	=> '41',
		'header_copy' 	=> 'Is Disability Keeping You From Working?',
		'offer_copy' 	=> 'Receive over $2000 a month with your 100% free disability evaluation. Avoid unecessary delays &amp; denials while improving your overall chances.',
		'offer_link'	=> 'http://d8v1.com/c/58984/56346/?sid=LIHH_OR_HP_W&amp;trx=17600173',
	);
	$Offers[] = array(
		'img_url' 		=> '/img/offer-logos/freescorefinder.png',
		'img_width' 	=> '270',
		'img_height' 	=> '69',
		'header_copy' 	=> 'Check Your Credit Score &amp; Report Now!',
		'offer_copy' 	=> 'Assistance programs, banks and landlords will check your credit. Fix issues now before it\'s too late!',
		'offer_link'	=> 'http://www.mb38.com/lnk.asp?o=5792&amp;c=918271&amp;a=158911&amp;s1=LIHH_OR_HP_W&amp;s2=17600173',
	);
	$Offers[] = array(
		'img_url' 		=> '/img/offer-logos/hgold.png',
		'img_width' 	=> '291',
		'img_height' 	=> '42',
		'header_copy' 	=> 'Get a Horizon Gold Card With $500 Limit',
		'offer_copy' 	=> 'Bad credit? No credit? Unemployed? The Horizon Card offers access to your favorite brands and helps to rebuild your credit.',
		'offer_link'	=> 'http://hgctrker.com/?a=72&amp;c=2&amp;s1=LIHH_OR_HP_W&amp;s5=17600173',
	);
	$Offers[] = array(
		'img_url' 		=> '/img/offer-logos/checkmate.png',
		'img_width' 	=> '319',
		'img_height' 	=> '123',
		'header_copy' 	=> 'Be Smart. Get Your Background Checked',
		'offer_copy' 	=> 'Landlords &amp; lendors often perform background checks prior to granting approval. You should know what\'s on it before they do.',
		'offer_link'	=> 'http://dmclix.com/c/16322/56346/?sid=LIHH_OR_HP_W&amp;trx=17600173',
	);
	$Offers[] = array(
		'img_url' 		=> '/img/offer-logos/efcom.png',
		'img_width' 	=> '263',
		'img_height' 	=> '40',
		'header_copy' 	=> 'Win Free Diapers For A Year',
		'offer_copy' 	=> 'Register now and you will receive access to free baby samples, baby coupons, magazines and more.',
		'offer_link'	=> 'http://www.securetrk1.com/rd/r.php?sid=5284&amp;pub=201624&amp;c1=LIHH_OR_HP_W&amp;c3=17600173',
	);
?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="offer-heading wall-heading">
					<div class="bg-blue-solid box font0">
						<div class="top-home-owner-opp-wrapper">
							<h1 class="h-1 vcenter">SPECIAL HOME OWNER OFFERS</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container offer-blocks">
		<div class="row">
			<div class="col-xs-12">
				<?php
					foreach($Offers as $Offer)
					{
						echo '<div class="box"><div class="box-border"></div><div class="left">';
						echo '<img src="' . $Offer['img_url'] . '" alt="" width="' . $Offer['img_width'] . '" height="' . $Offer['img_height'] . '" class="img-responsive">';
						echo '</div><div class="middle">';
						echo '<h3>' . $Offer['header_copy'] . '</h3>';
						echo '<p>' . $Offer['offer_copy'] . '</p>';
						echo '</div><div class="right">';
						echo '<a href="' . $Offer['offer_link'] . '" target="_blank" class="btn03 blue-btn">Get Started</a>';
						echo '</div></div>';
					}
				?>
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>