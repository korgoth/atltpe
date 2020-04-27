<?php /* Smarty version 2.6.25, created on 2020-04-15 17:10:03
         compiled from /Users/korgoth/htdocs/templates/lib/../templates/order-templates/2SLIM/Green/GR/thank.html */ ?>
<!DOCTYPE html>
<html lang="ru" class="no-js">

<head>
    <meta charset="utf-8">
    <title>2SLIM</title>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php echo '
	<style>
		.alert-danger { background: #b7727d; border: solid 1px red !important}
	</style>
	'; ?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'compability.html', 'smarty_include_vars' => array('include_jquery' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<?php echo '
	<style>
		
		body { background-color: #efefef}

	</style>
	'; ?>


</head>

<body>
    <section class="block1" style='background-size: cover !important'>
        <div class="container">
            <div class="right-b1-cnt">
                <div class="center">
                    <div class="h __b1-h uppercase"><h1>2SLIM</span></h1></div>
                </div>
                <div class="ram-tx clear center uppercase" style='font-size: 1.5em'>ΠΙΣΤΟΠΟΙΗΣΗ-ΕΥΧΑΡΙΣΤΟΥΜΕ ΓΙΑ ΤΗΝ ΠΑΡΑΓΓΕΛΙΑ ΣΑΣ!</div>
                Η τιμή της παραγγελίας σας είναι <?php echo $this->_tpl_vars['order']['total']; ?>
€. Τα έξοδα της παράδοσης είναι  <?php echo $this->_tpl_vars['order']['shipping']; ?>
€. Το συνολικό ποσό για να πληρώσετε στον κούριερ είναι <?php echo $this->_tpl_vars['order']['grand_total']; ?>
€.
                <br /><br />
                Σύντομα το προσωπικό μας θα επικοινωνήσει μαζί σας στο τηλέφωνο που έχετε δώσει για να επιβεβαιώσει τη διεύθυνση παράδοσης καθώς και την ποσότητα των προϊόντων σας.
                <br /> <br />
                Παρακαλούμε να περιμένετε κλήση σε εργάσιμες ώρες (μεταξύ 9:00-18:00)
                <div class="text-center"><img src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/img/2Slim2016-small.png" alt="" class="pack-img-mob"></div>

                <?php if (! $this->_tpl_vars['hide_form_below']): ?>
                <div>
                <h3>Για να ολοκληρώσετε την παραγγελία σας, παρακαλούμε να εισάγετε:</h3>
                <br />
                <label for="email">E-mail</label>
                <input type="text" name='email' id='email' class='form-control order_data red-tooltip' data-toggle="tooltip" data-placement="top" title="Πληκτρολογήστε τη διευθύνση του ηλεκτρονικού ταχυδρομείου σας" data-trigger="manual">
                <label for="city">Τοποθεσία (Πόλη / χωριό):</label>
                <input type="text" name='city' id='city' class='form-control order_data red-tooltip' data-toggle="tooltip" data-placement="top" title="Πληκτρολογήστε το όνομα της πόλης σας" data-trigger="manual">
                <label for="address">Διεύθυνση (οδός και αριθμός): </label>
                <input type="text" name='address' id='address' class='form-control order_data red-tooltip' data-toggle="tooltip" data-placement="top" title="Πληκτρολογήστε τη διεύθυνσή σας" data-trigger="manual">
                <label for="zip">Ταχυδρομικός κώδικας:  </label>
                <input type="text" name='zip' id='zip' class='form-control order_data red-tooltip' data-toggle="tooltip" data-placement="top" title="Πληκτρολογήστε τον ταχυδρομικό σας κώδικα" data-trigger="manual">
                    <br />
                    <input type="button" value='Ολοκληρώστε την παραγγελία μου!' id='save_details' data-oid='<?php echo $this->_tpl_vars['order_id']; ?>
' style='padding: 0.5em; font-size: 1.3em; margin: none '  >
                </div>
                <?php endif; ?>

            </div>
            <div class="pack1">
            </div>
        </div>
    </section>
    <div class="hidden"></div>


<?php if ($this->_tpl_vars['GA']): ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $this->_tpl_vars['GA']; ?>
', 'auto');
  ga('send', 'pageview');

</script>
<?php endif; ?>

<script>
	<?php echo '
	$(function(){
		$(\'a\').click(function(e){
			e.preventDefault();

			window.onbeforeunload = null;

			//window.location.href = $(this).attr(\'href\');
		});
	});
  '; ?>


	<?php if (FALSE): ?>
	  <?php echo '
	window.onbeforeunload =  function (e) {

		var confirmationMessage = \'************************** \\n \\n **************************\';

		(e || window.event).returnValue = confirmationMessage; //Gecko + IE
		return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
	};
	'; ?>

	<?php endif; ?>
</script>

<?php echo $this->_tpl_vars['tracking_pixel']; ?>

</body>

</html>