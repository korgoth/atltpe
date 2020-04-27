<?php /* Smarty version 2.6.25, created on 2020-04-24 20:52:05
         compiled from mouseout_popup.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'mouseout_popup.html', 19, false),array('modifier', 'replace', 'mouseout_popup.html', 105, false),)), $this); ?>
<script>var mopshown = false;</script>
<?php if ($this->_tpl_vars['campaign']['mouseout_popup'] && ! $this->_tpl_vars['is_mobile']): ?>
<div id='mop_holder'>
	<a href="#" class='mop_close'>✕</a>
	<?php if ($this->_tpl_vars['mop_header_text']): ?>
	<div class='mop_header'><?php echo $this->_tpl_vars['mop_header_text']; ?>
</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['product_img']): ?>
	<div class='mop_col mop_col_left'>
		<div class="mop_padder">
			<img src="<?php echo $this->_tpl_vars['product_img']; ?>
" alt="" class='prod_img'>
		</div>
	</div>
	<?php endif; ?>
	<div class='mop_col mop_col_right <?php if (! $this->_tpl_vars['product_img']): ?>mop_full<?php endif; ?>'>
		<div class="mop_padder">
			<div class='mop_text'><?php echo $this->_tpl_vars['mop_body_text']; ?>
</div>
			<div class="mop_form-row">
			  <input type="text"  placeholder="<?php echo ((is_array($_tmp=@$this->_tpl_vars['mop_name'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Name') : smarty_modifier_default($_tmp, 'Name')); ?>
" name=first_name class="order_data required mop_input" title="<?php echo ((is_array($_tmp=@$this->_tpl_vars['mop_name_tooltip'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['mop_name']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['mop_name'])); ?>
">
			</div>
			<div class="mop_form-row">
			  <input type="text" placeholder="<?php echo ((is_array($_tmp=@$this->_tpl_vars['mop_phone'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Phone') : smarty_modifier_default($_tmp, 'Phone')); ?>
" name='phone' class="order_data required mop_input" title="<?php echo ((is_array($_tmp=@$this->_tpl_vars['mop_phone_tooltip'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['mop_phone']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['mop_phone'])); ?>
">
			</div>
			<br style='clear: both'>
			<?php if (! $this->_tpl_vars['product_img']): ?><br><?php endif; ?>
			<a class="buynow mop_buynowbtn" data-pid='<?php echo $this->_tpl_vars['campaign']['product_id']; ?>
' data-campaign-uri='<?php echo $this->_tpl_vars['campaign']['uri']; ?>
'>
			<?php echo ((is_array($_tmp=@$this->_tpl_vars['mop_buy_now'])) ? $this->_run_mod_handler('default', true, $_tmp, 'BUY NOW') : smarty_modifier_default($_tmp, 'BUY NOW')); ?>

			</a>
		</div>
	</div>
	<br style='clear: both'>
	<?php if ($this->_tpl_vars['mop_footer_text']): ?>
	<div class='mop_footer'><br><?php echo $this->_tpl_vars['mop_footer_text']; ?>
</div>
	<?php endif; ?>

</div>
<?php echo '
<script>
$(function(){
	$(\'html\').mouseleave(function(){
		if(!mopshown){
			$(\'#mop_holder\').css({display: \'block\'});
			mopshown = true;
		}
	});

	$(\'#mop_holder .mop_close\').click(function(e){
		e.preventDefault();
		$(\'#mop_holder input\').each(function(){
			$(this).tooltipster(\'hide\');
		});
		$(\'#mop_holder\').css({display: \'none\'});
	});	
});
</script>
<style type=\'text/css\'>
	.mop_input { color: black !important; background: white !important}
	#mop_holder {
		position: fixed;
		display: none;
		top: 50px;
		left: 50%; margin-left: -300px;
		width: 600px;
		background: #cccccc; /* Old browsers */
		background: -moz-linear-gradient(top,  #cccccc 0%, #999999 44%, #666666 100%);
		background: -webkit-linear-gradient(top,  #cccccc 0%,#999999 44666666 100%);
		background: linear-gradient(to bottom,  #cccccc 0%,#999999 44%,#666666 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#cccccc\', endColorstr=\'#666666\',GradientType=0 );
		border-radius: 15px;
		padding: 10px;
		z-index: 9999;
		box-shadow: 0px 0px 30px #888888;
   }
   #mop_holder .mop_col { width: 49%; padding: 0; float: left; text-align: center; overflow: hidden }
   #mop_holder .mop_col_left { width: 40%;  }
   #mop_holder .mop_padder { padding: 10px;  }
   #mop_holder .mop_col_right { width: 59%;  }
   #mop_holder .mop_full { width: 100%; padding: 20px; text-align: center; }
   #mop_holder .mop_col img.prod_img { width: 100%; height: auto; }

	#mop_holder a { font-size: 20px; font-weight: bold; text-align: center; color: white !important; text-decoration: none; cursor: pointer; }
	#mop_holder .mop_buynowbtn { padding: 10px 20px; background: red; border-radius: 8px; text-shadow: 1px 1px  5px darkgray; font-size: 18px; line-height: 1.5em}
	#mop_holder input { border-radius: 8px; margin: 2px; padding: 7px; width: 90%; border: solid 1px gray }
	#mop_holder .mop_form-row { padding:3px; }
	#mop_holder a.mop_close { position: absolute; top: 10px; right: 15px; }

	#mop_holder .mop_full .mop_form-row { width: 50%; float: left; text-align: center;}

	#mop_holder .mop_text { margin-top: 20px; color: white; font-size: 18px; line-height: 130% }
	#mop_holder .mop_footer { font-size: 12px; color: white; text-align: center}
	#mop_holder .mop_header { margin: 5px 30px; padding: 10px; font-size: 14px; color: black; text-align: center; background: #ffc000; border: solid 1px #f79646; font-weight: bold; border-radius: 4px;}

	#mop_holder .buynow { margin: 0 !important}
	
	@media (max-width: 1000px) {
		#mop_holder { display: none !important; }
	}
</style>
'; ?>

<?php endif; ?>


<?php if ($this->_tpl_vars['styles']): ?>
<style>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['styles'])) ? $this->_run_mod_handler('replace', true, $_tmp, "BEGIN:", '{') : smarty_modifier_replace($_tmp, "BEGIN:", '{')))) ? $this->_run_mod_handler('replace', true, $_tmp, "END;", '}') : smarty_modifier_replace($_tmp, "END;", '}')); ?>

</style>
<?php endif; ?>