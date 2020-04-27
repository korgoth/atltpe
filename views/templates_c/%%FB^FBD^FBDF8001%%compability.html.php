<?php /* Smarty version 2.6.25, created on 2020-04-24 20:48:17
         compiled from compability.html */ ?>
		<?php if ($this->_tpl_vars['order_id'] || $this->_tpl_vars['campaign']['noindex'] == '1'): ?>
			<meta name="robots" content="noindex, nofollow">
		<?php endif; ?>
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    	<!--[if lt IE 9]>
    	  <script src="//cdn4.cachedrives.com/../c/js/html5shiv.js"></script>
    	  <script src="//cdn4.cachedrives.com/../c/js/respond.js"></script>
    	<![endif]-->

        <?php if ($this->_tpl_vars['include_jquery']): ?>
        <script   src="https://code.jquery.com/jquery-1.12.2.js"   integrity="sha256-VUCyr0ZXB5VhBibo2DkTVhdspjmxUgxDGaLQx7qb7xY="   crossorigin="anonymous"></script>
        <?php endif; ?>

    	<!-- Include all compiled plugins (below), or include individual files as needed -->
        <?php if (! $this->_tpl_vars['exclude_bootstrap']): ?>
    	<script src="//cdn4.cachedrives.com/../c/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//cdn4.cachedrives.com/../c/css/bootstrap.min.css" />
        <?php endif; ?>

	<link rel="stylesheet" href="//cdn4.cachedrives.com/../c/css/tooltipster.bundle.min.css" />
    	<script src="//cdn4.cachedrives.com/../c/js/tooltipster.bundle.min.js"></script>
    	<script src="./assets/js/cart.js?v=6"></script>
    	<script src="//cdn4.cachedrives.com/../c/js/jquery.playSound.js"></script>
		
		
		<?php if (! $this->_tpl_vars['exclude_countdown']): ?>
    	<script src="//cdn4.cachedrives.com/../c/js/jquery.countdown.min.js"></script>
		<?php endif; ?>
		
    	<script type="text/javascript">var zdir = '<?php echo $this->_tpl_vars['dir']; ?>
'; var zlang = '<?php echo $this->_tpl_vars['lang']; ?>
'; var pid = '<?php echo $this->_tpl_vars['product']['id']; ?>
'; var cur = '<?php echo $this->_tpl_vars['campaign']['currency']; ?>
'; var cc = '<?php echo $this->_tpl_vars['campaign']['country']; ?>
';</script>

		<script>
			$(function(){
				if ($('div#mop_holder').length > 0) {
					$('input').attr('autocomplete', 'off');
				}
				
				
				<?php if (! $this->_tpl_vars['dont_append_legal_links']): ?>
					$('body').append('<div class=legalfooter style="background: lightgrey; text-align: center !important; padding: 5px; font-size: 12px !important; z-index: 9999;"><a href="<?php echo $this->_tpl_vars['dir']; ?>
/terms/<?php echo $this->_tpl_vars['campaign']['country']; ?>
" target=_blank><?php echo $this->_tpl_vars['lang_terms']; ?>
</a> | <a href="<?php echo $this->_tpl_vars['dir']; ?>
/privacy/<?php echo $this->_tpl_vars['campaign']['country']; ?>
" target=_blank><?php echo $this->_tpl_vars['lang_privacy']; ?>
</a></div>');
				<?php endif; ?>
			});
		</script>

        <style>
        .red-tooltip + .tooltip > .tooltip-inner {background-color: #f00;}
        .red-tooltip + .tooltip.top > .tooltip-arrow {border-top-color: #f00;}
        </style>
		<link rel="icon" href="data:;base64,iVBORw0KGgo=">

		<?php if ($this->_tpl_vars['campaign']['last_buyers'] && ! $this->_tpl_vars['order_id']): ?>
		<script>
			$(function(){
				$('body').append('<div id="custom_last_buyer"><?php if ($this->_tpl_vars['lb_img']): ?><img src="//cdn4.cachedrives.com/../c/css/img/lbtn/<?php echo $this->_tpl_vars['campaign']['product_id']; ?>
.png<?php endif; ?>" /><p><span class="lb-name"></span> <span class="lb-from"></span> <span class="lb-location"></span> <span class="lb-just-placed"></span> </div>');
			});
		</script>
        <link rel="stylesheet" href="//cdn4.cachedrives.com/../c/css/last_buyer.css" />
		<script>zdir = 'https://bg.immunoactivator-promo.com';</script>
    	<script src="//cdn4.cachedrives.com/../c/js/last_buyer.js"></script>
		<?php endif; ?>