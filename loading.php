<!DOCTYPE html>
<html lang="en">
<head>
	<title>Local Solar Quotes From The Experts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="msapplication-config" content="none">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:300,400,700">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Condensed">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!--[if lt IE 9]>
		<script src="/js/html5shiv.min.js"></script>
		<script src="/js/respond.min.js"></script>
	<![endif]-->

	<!--JS SCRIPTS-->
	<script src="/js/jquery-1.11.3.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/plugins.js"></script>
	<script src="/js/jquery.validate.min.js"></script>	
	<script src="/js/jquery.mask.min.js"></script>
	<script src="/js/jquery.waypoints.min.js"></script>	
</head>
<body class="body-loading">
	<div class="col-xs-12 loading-wrapper text-center paddingtb40">
		<div class="spinner-wrapper">
			<div class="container">
				<h1 class="h-1">Heading</h1>
				<i class="fa fa-spinner fa-spin margint30"></i>
				<span>Loading Quote Information . . .</span>
				<p class="margint30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 loading-output-wrapper text-center paddingtb40">
		<div class="loading-output">
			<button class="orange-btn loading-button" type="submit">I am a button</button>
		</div>
	</div>
	<script>
		var text 		= ["Verifying Address . . .", "Verifying Roof Shade . . .", "Verifying Electricity Provider . . .", "Phone Validation Complete . . .", "Email Validation Complete . . .", "Checking Local Providers . . ."];
		var counter 	= 0;
		var textWrapper = $('.spinner-wrapper span');

		function change(){
			textWrapper.html(text[counter]);
			  
			if(counter <= text.length){
				counter++;
			}else{
				textWrapper.html("Finishing . . .");
				setInterval(function(){
					$('.loading-wrapper').hide();
					$('.loading-output').show(function(){
						$('.loading-output-wrapper').css({'display':'table'});
					});
				}, 30000);
				
			}
		}
		setInterval(change, 10000);
	</script>
</body>
</html>