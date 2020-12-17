<?php 
	include 'header-html.php';
	include 'header.php'; 
	$QuestionArray = array();
?>
<?php 
	//sample01
	$QuestionArray[] = array(
		'Title' => 'Start Saving Big Lower Your Electric Bill Up to 80% With Solar',
		'Banner' => '<img src="/img/sample01.jpg" alt="" width="1140" height="110" class="hidden-xs img-responsive">',
		'Text' => 'We provide solar quotes for Americans everyday, matching them with the best local installers. Our service is offered completely free and includex multiple installer quotes to help guarantee the lowest prices as well as timely and relevant information on rebates and incentives.<br><br>
			<a class="lnk_nt text-center" href="" target="_blank"><b>Click Here for Information on Local Installers</b></a>
			<div class="grey-cont padding15">
				<p>Take Advantage Today and Get Quotes from Local Installers 100% Free!</p>
				<ul class="blue-check grey-cont-list">
					<li>Get Big Rebates and Tax Incentives</li>
					<li>Qualify for 0% Down Financing</li>
					<li>Increase Your Home Value Significantly</li>
					<li>Clean, Renewable and Efficient</li>
				</ul>
			</div>',
		'ButtonText' => 'Get Quotes',
		'ButtonLink' => 'http://yahoo.com/',
		'Modal'		 => '
			<div class="modal fade" id="sddModal" tabindex="-1" role="dialog" aria-labelledby="ssd_benefits_now_modal_label">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<div class="modal-title">
							<h1 id="ssd_benefits_now_modal_label">Congratulations</h1>
							<h2>You Have Taken the First Step Towards Going Solar!</h2>
						</div>
		 			 </div>
					<div class="modal-body text-center">
						<p class="announcement">
							Unfortunately, at this time your answers don\'t qualify you to receive free solar quotes. However, we would like to share with you some excellent opportunities for home owners. Please review these offers to find ways to save money, cut your electricity bill and much more!
						</p>
					</div>
				</div>
			</div>
		</div>
		',
	);

	//sample02
	$QuestionArray[] = array(
		'Title' => 'Start Saving Big Lower Your Electric Bill Up to 80% With Solar',
		'Banner' => '<img src="/img/sample01.jpg" alt="" width="1140" height="110" class="hidden-xs img-responsive">',
		'Text' => 'We provide solar quotes for Americans everyday, matching them with the best local installers. Our service is offered completely free and includex multiple installer quotes to help guarantee the lowest prices as well as timely and relevant information on rebates and incentives.<br><br>
			<a class="lnk_nt text-center" href="" target="_blank"><b>Click Here for Information on Local Installers</b></a>',
		'SubText' => 'We provide solar quotes for Americans everyday, matching them with the best local installers. Our service is offered completely free and includex multiple installer quotes to help guarantee the lowest prices as well as timely and relevant information on rebates and incentives.',
		'Disclaimer' => 'By clicking the "Join Now" button, you confirm by electronic signature that you are at least 18 years of age and (1) you consent to receive emails from us and our advertisers about government assistance programs, help and assistance opportunities, housing, employment, educational opportunities, informational insights about legal, medical and financial matters as well as commercial offers generally relevant to our members; and (2) you confirm you have read and understand the Disclaimers and Disclosures below which have been posted for your protection; and (3) you agree to this site\'s Privacy Policy and Terms of Use. You understand that consent is not a condition of purchase.',
		'ButtonText' => 'Get Quotes',
		'ButtonLink' => 'http://yahoo.com/',
	);
?>
<div class="survey-box-wrapper marginb30">
	<div class="blue-bg02 paddingtb15 ts-black">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="text-center h-1">Your Home Owner Opportunities</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 margint30" id="surveybox-cont">
				<?php
				$LoopCounter = 1;
				foreach($QuestionArray as $Question)
				{
					$ButtonClass = 'btn03 blue-btn submit-btn';
					if (!empty($Question['ButtonClass']))
						$ButtonClass = $Question['ButtonClass'];
					
					echo '<div class="surveybox" style="display:none;" id="surveyboxq' . $LoopCounter . '"><div class="surveybox-border">';
					echo '<div class="banner">' . $Question['Banner'] . '</div>';
					echo '<h2 class="smquestion">' . $Question['Title'] . '</h2>';
					echo '<div class="row"><div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">';
					if (!empty($Question['Text']))
					{
						echo '<div class="smtext">';
						echo $Question['Text'];
						echo '</div>';
					}
					echo '<div class="out_btn out_btn_nt">';
					echo '<input type="button" class="' . $ButtonClass . '" data-href="' . $Question['ButtonLink'] . '" value="' . $Question['ButtonText'] . '">';
					echo '</div>';
					if (!empty($Question['SubText']))
					{
						echo '<div class="smtext2">';
						echo $Question['SubText'];
						echo '</div>';
					}
					if (!empty($Question['Disclaimer']))
					{
						echo '<div class="smdisc">';
						echo $Question['Disclaimer'];
						echo '</div>';
					}
					echo '</div></div></div>';
					echo '<div class="skip_btn"><input type="button" value="No, Thank You"><div class="Clear"></div></div>';
					echo '</div>';
					$LoopCounter++;
				}
				?>	
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
jQuery.fn.exists = function(){return this.length>0;}

var pos = 1;
var maxpos = <?php echo count($QuestionArray); ?>;

$(document).ready(function()
{
	$('#sddModal').modal();

	setTimeout(function(){
	    $('#sddModal').modal('hide')
	}, 15000);

	$('#surveyboxq1').show();
	function nt()
	{
		cd = '#surveyboxq' + pos;
		pos += 1;

		if (pos <= maxpos)
		{
			$(cd).css('position', 'absolute').fadeOut(function(){
				nd = '#surveyboxq' + pos;
				$(nd).fadeIn(100, function() 
				{
					$("html,body").animate({ scrollTop: 0 }, '1000');
				});
			});
		}
		else
		{			
			window.location = '/resources-and-articles';
		}
	}
	
	function gto(url) { window.open(url); }
	function gtont(url) { gto(url); nt(); }
	$('.surveybox .skip_btn input').click(function () {	
		nt();
	});
	$('.surveybox .lnk_nt').click(function () { nt(); });
	$('.surveybox .out_btn_nt input').click(function () { gtont($(this).attr("data-href")); return false; });
	$('.surveybox .out_btn_nn input').click(function () { gto($(this).attr("data-href")); return false; });
});
</script>
<?php include 'footer.php'; ?>
