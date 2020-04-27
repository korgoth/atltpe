<?php /* Smarty version 2.6.25, created on 2020-04-15 16:36:35
         compiled from /Users/korgoth/htdocs/templates/lib/../templates/order-templates/2SLIM/Green/GR/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', '/Users/korgoth/htdocs/templates/lib/../templates/order-templates/2SLIM/Green/GR/index.html', 273, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru" xml:lang="ru" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- [pre]land_id = 532 -->
    <script>var locale = "gr";</script>        <!-- country code -->
    <script>var lang_locale = "en";</script>   <!-- browser locale -->
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/placeholders.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/dr.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/dtime.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/js.cookie.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/order_me.js"></script>
    
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/sender.js"></script>
    
	<?php echo '
    <script>
        
        var package_prices = {};
        var shipment_price = 8;
        var name_hint = \'Βαλιανοσ γεωργιος\';
        var phone_hint = \'306979638635\';
        
        $(document).ready(function() {
            
            moment.locale("gr");
            $(\'.day-before\').text(moment().subtract(1, \'day\').format(\'D.MM.YYYY\'));
            $(\'.day-after\').text(moment().add(1, \'day\').format(\'D.MM.YYYY\'));
            
        });
    </script>
	'; ?>


    
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "compability.html", 'smarty_include_vars' => array('exclude_bootstrap' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<title>2Slim</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link href="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/css/style.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/js.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/js/order.js" type="text/javascript"></script>
</head>
<body>
<div class="dbody">
<div class="content clearfix">
<div class="top_menu">
<div class="opt">
<ul>
<li class="l1"><a>ΑΡΧΗ</a></li>
<li class="l2" onclick="<?php echo '$(\'html,body\').animate({scrollTop: 800}, 400);'; ?>
"><a>ΓΙΑΤΙ ΕΙΝΑΙ ΧΡΗΣΙΜΟ;</a></li>
<li class="l4 for_scroll"><a href="#research">ΕΡΕΥΝΕΣ</a></li>
<li class="l5" onclick="<?php echo '$(\'html,body\').animate({scrollTop: 2900}, 400);'; ?>
"><a>ΑΠΟΤΕΛΕΣΜΑΤΑ</a></li>
<li class="l6 for_scroll"><a href="#scroll_here_please">ΠΑΡΑΓΓΕΙΛΕΤΕ ΑΜΕΣΩΣ!</a></li>
</ul>
<span class="soc">
</span>
</div>
</div>
<div class="monitor m1">
<div class="wrapper">
<div class="opt">
<div class="attant_block clearfix">
<p>ΣΗΜΕΙΩΣΗ:</p>
<span class="tx">
							Αυτή τη στιγμή το προϊόν είναι διαθέσιμο στο στοκ. Ωστόσο, μετά τη δημοσίευση του άρθρου την 1η Μαΐου η διαθεσιμότητα του προϊόντος δεν θεωρείται απαραίτητη.
						</span>
</div>
<span class="bl_tx">
<h3>ΑΠΟΤΕΛΕΣΜΑΤΙΚΗ <br/> ΦΟΡΜΟΥΛΑ <br/> ΓΙΑ ΤΗΝ ΑΝΤΙΜΕΤΩΠΙΣΗ ΤΟΥ ΥΠΕΡΒΟΛΙΚΟΥ ΒΑΡΟΥΣ</h3>
<span class="line top">
</span>
<span class="tx">
<ul>
<li>100% Βιολογικό προϊόν </li>
<li>Αποτοξίνωση του σώματος και καύση του λίπους</li>
<li>Εμφανής μείωση του όγκου, μετά από 3 ημέρες</li>
</ul>
</span>
<span class="line bot">
</span>
</span>
<span class="for_scroll"><a class="send_phone go_down" href="#scroll_here_please">ΠΑΡΑΓΓΕΛΙΑ</a></span>
<img alt="logo" id="logo" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/_i/2Slim2016.png"/>
<div class="price">
<div>
<span class="pr"> εγγυημένα <br/>αποτελέσματα</span>
</div>
</div>
</div>
</div>
</div>
<div class="monitor m2">
<div class="wrapper">
<div class="opt">
<span class="bl_tx">
<h3>ΠΟΙΑ ΕΙΝΑΙ ΤΑ ΟΦΕΛΗ ΤΗΣ ΣΥΣΤΗΜΑΤΙΚΗΣ ΧΡΗΣΗΣ ΤΟΥ 2Slim</h3>
<span class="line top" style="margin-bottom: 5px;">
</span>
<span class="tx">
<p>
								Καθαρίζει &amp; αποτοξινώνει το σώμα
							</p>
<p>
								Μειώνει την όρεξη και αποτρέπει την υπερβολική κατανάλωση φαγητού
							</p>
<p>
								Καταπολεμά την κυτταρίτιδα &amp; αποτρέπει την επανεμφάνισή της
							</p>
<p>
								Επιταχύνει το μεταβολισμό για γρήγορη καύση του λίπους
							</p>
<p>
								Μακροχρόνια απώλεια βάρους: Ξεχάστε για πάντα τα κιλά που χάσατε!
							</p>
</span>
<span class="line bot" style="margin-top: 5px;">
</span>
</span>
<div class="ul_tx_box">
<h3>ΤΡΙΑ ΑΠΛΑ ΒΗΜΑΤΑ ΓΙΑ ΕΠΙΤΥΧΗΜΕΝΗ ΑΠΩΛΕΙΑ ΒΑΡΟΥΣ</h3>
<span class="ul_tx">
<span>επίθεση:</span><br/>
								Διάρκεια: 5 ημέρες.
								Πίνετε 10 ml του 2Slim τρεις φορές την ημέρα πριν από το φαγητό.
							</span>
<span class="ul_tx">
<span>απώλεια βάρους</span><br/>
								Διάρκεια: 15 ημέρες.
								Πίνετε 10 ml του 2Slim 2 φορές την ημέρα πριν από το φαγητό.
								Εάν είναι απαραίτητο, επαναλάβετε το στάδιο.
							</span>
<span class="ul_tx">
<span>σταθεροποίηση</span>
								Διάρκεια: 30 ημέρες.
								Πίνετε 10 ml του 2Slim μία φορά την ημέρα το πρωί με άδειο στομάχι.
							</span>
</div>
<img alt="garant" id="garanty" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/_i/garant.png"/>
<span class="for_scroll"><a class="go_down" href="#scroll_here_please">Θέλω να δοκιμάσω!</a></span>
</div>
</div>
</div>
<div class="monitor m3" id="opinion">
<div class="wrapper">
<div class="opt">
<div class="doc_block_text">
<h3>ΤΙ ΛΕΝΕ ΟΙ ΕΙΔΙΚΟΙ ΓΙΑ ΤΟ 2Slim</h3>
<div>
<p>Προς εμένα στρέφονται άνθρωποι, οι οποίοι ζητούν την ιδανική συνταγή για επιτυχημένο αδυνάτισμα, καθώς συχνά τα άτομα που αδυνατίζουν, μετά το τέλος της δίαιτάς τους, αντιμετωπίζουν ξανά την απότομη αύξηση του βάρους τους. Επιπλέον, έχουν καταγραφεί περιπτώσεις, όπου η γενική κατάσταση της υγείας επιδεινώθηκε σημαντικά, κατά τη διάρκεια της δίαιτας, λόγω υποσιτισμού. Για αυτές τις περιπτώσεις, θα ήθελα να συστήσω τις σταγόνες 2Slim. Οι σταγόνες αυτές περιλαμβάνουν μια ποικιλία από απαραίτητα αμινοξέα και ανόργανα συστατικά, τα οποία επηρεάζουν πολύ θετικά τον οργανισμό και μπορούν να μειώσουν το σωματικό λίπος στα ελάχιστα επίπεδα, τόσο ώστε να μην προκαλείται βλάβη στην υγεία του ατόμου. Με το 2Slim, μπορείτε να μην περιορίσετε τη διατροφή σας. Το προϊόν αυτό ρυθμίζει την όρεξη, με αποτέλεσμα να μην έχετε την επιθυμία να καταναλώσετε περισσότερο από όσο χρειάζεται ο οργανισμός σας. 

							</p>
<p>Σε διάστημα 1-2 μηνών, το 2Slim θα σας βοηθήσει να χάσετε έως και 35 κιλά.</p>
<img alt="sign" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/_i/sign.png"/>
<span class="inic">
<span class="tit">
									  Βιωρίκα Ολαρού-Στεφανιδάκη  
								</span>
<span class="tx">
									(Γενική Κλινική &amp; Κέντρο Μητέρας, Ιατρός-Διατροφολόγος, Διδάκτωρ Ιατρικής Διατροφολογίας)
								</span>
</span>
</div>
</div>
<div class="ul3">
<span class="line drk top">
</span>
<ul>
<li>Τονώνει το σώμα</li>
<li>Μειώνει τα επίπεδα χοληστερίνης στο αίμα</li>
<li>Διαθέτει 100% φυσική σύνθεση</li>
<li>Συμβάλει στην απώλεια 5-9 κιλών σε 20 ημέρες</li>
<li>Επιστημονικά αποδεδειγμένη αποτελεσματικότητα των βιολογικών σταγόνων</li>
<li>Δεν υπάρχει αποτελεσματικότερος τρόπος για απώλεια βάρους στην αγορά!</li>
</ul>
<span class="line drk bot" style="margin-top: 70px;">
</span>
</div>
<span class="for_scroll"><a class="go_down" href="#scroll_here_please">
						ΠΑΡΑΓΓΕΙΛΕΤΕ ΑΜΕΣΩΣ!
					</a></span>
<img alt="doc" id="doctor" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/_i/doc.png"/>
</div>
</div>
</div>
<div class="monitor m4" id="research">
<div class="opt">
<span class="tx">
<h3>ΜΕΛΕΤΕΣ</h3>
<p>
					 Το ΕΜΑ (European Medicines Agency) πραγματοποίησε κλινικές μελέτες, σχετικά με τις ιδιότητες και την αποτελεσματικότητα των σταγόνων 2Slim.
				</p>
<p>Ως αποτέλεσμα της 30ήμερης μέλετης, σε μια ομάδα εθελοντών αποτελούμενη από 76 άτομα, με περιττό βάρος άνω των 10 κιλών, αποδείχθηκαν τα ακόλουθα συμπεράσματα:</p>
<p>
<span class="ac_g">1.</span>	Σημειώθηκε σημαντική μείωση του βάρους, σε όλη την ομάδα εθελοντών, από 7 έως 19 κιλά
				</p>
<p>
<span class="ac_g">
                      2.</span>	Σημειώθηκε σημαντική βελτίωση της υγείας και της τόνωσης του οργανισμού, στο 97% των εθελοντών
				</p>
<p>
<span class="ac_g"> 3.</span>	Σημειώθηκε σημαντική βελτίωση της λειτουργίας του ήπατος και του παγκρέατος
				</p>
<p>
<span class="ac_g">4.	</span>Εξαιρετική βελτίωση των μεταβολικών διεργασιών του οργανισμού
				</p>
<p>
					Μέσω πειραμάτων, αποδείχθηκε επιστημονικά, ότι ο βιολογικός λιποδιαλύτης 2Slim είναι απαραίτητος για άτομα και ασθενείς με υπερβολικό σωματικό βάρος. Επίσης, συμβάλλει στην πρόληψη ασθενειών του ήπατος, του παγκρέατος και δρα αποτρεπτικά κατά των ελκωδών αλλοιώσεων. 
				</p>
</span>
<div class="sertificats">
</div>
<span class="for_scroll"><a class="go_down" href="#scroll_here_please">ΠΑΡΑΓΓΕΙΛΕΤΕ ΑΜΕΣΩΣ!</a></span>
</div>
</div>
<div class="monitor m5">
<div class="opt">
<span class="tx">
<h3>
					ΠΡΑΓΜΑΤΙΚΟΙ ΑΝΘΡΩΠΟΙ – ΠΡΑΓΜΑΤΙΚΑ ΑΠΟΤΕΛΕΣΜΑΤΑ
				</h3>
<p>
					Το 2Slim αποτελεί ένα μοναδικό προϊόν και μια επαναστατική μέθοδο για την αντιμετώπιση του υπερβολικού βάρους. Οι βιολογικές σταγόνες είναι ένα πανίσχυρο αντιοξειδωτικό, το οποίο μειώνει το ποσοστό του λίπους στο σώμα, ενώ παράλληλα προκαλεί τη διαδικασία της καύσης του λίπους, το οποίο συγκεντρώνεται κάτω από την επιδερμίδα.
				</p>
</span>
<div class="blocks">
<div class="white_block" style="margin-left:0px;">
<div class="info i1">
<span class="name">
							Angelina
						</span>
<span class="age">
							32 ετών
						</span> <br/>
</div>
</div>
<div class="white_block">
<div class="info i2">
<span class="name">
							Nicole 
						<span class="age">
							27 ετών
						</span> <br/>
</span></div>
</div>
<div class="white_block">
<div class="info i3">
<span class="name">
							Maria
						</span>
<span class="age">
							35 ετών
						</span> <br/>
</div>
</div>
</div>
</div>
</div>
<div class="monitor m6">
<div class="opt">
<div class="form_high">
<p>ΠΑΡΑΓΓΕΙΛΕΤΕ!</p>
</div>
<div class="price">
<div>
<span class="pr">
							Σύνολο: 
						</span>
<span class="price_val">
							<?php echo $this->_tpl_vars['campaign']['price']; ?>
 <?php echo $this->_tpl_vars['campaign']['currency']; ?>

						</span>
<p class="price_old">
<span>Κανονική τιμή: <?php echo smarty_function_math(array('equation' => "x*2",'x' => $this->_tpl_vars['campaign']['price'],'format' => "%.2f"), $this);?>
 <?php echo $this->_tpl_vars['campaign']['currency']; ?>
</span>
</p>

</div>
</div>
<img id="prod_foot" src="<?php echo $this->_tpl_vars['cdn']; ?>
/<?php echo $this->_tpl_vars['template']; ?>
/_i/2Slim2016.png"/>
<form action="" class="clearfix" id="scroll_here_please" method="post">
					<div class="form_box">
<div class="input_box frm_inp_b2">
<input class="frm_inp2 order_data required" name="first_name" placeholder="ΟΝΟΜΑ ΕΠΙΘΕΤΟ" type="text"/>
</div>
<div class="input_box frm_inp_b4">
<input class="phone_input frm_inp4 only_number order_data required" name="phone" placeholder="ΤΗΛΕΦΩΝΟ" type="text"/>
</div>
<p style="color: #fff;  font-size: 16px;">
                       Έξοδα αποστολής:<span style="font-weight: bold;"> <?php echo $this->_tpl_vars['campaign']['shipping']; ?>
 <?php echo $this->_tpl_vars['campaign']['currency']; ?>
</span> για όλη τη χώρα.
                      </p>
<p style="margin-bottom: 10px">
<span style="font-size: 15px; color: #fff;">Τιμή:</span> <b style=" font-weight: bold; font-size: 15px;
  color: #EE7C2D;"><?php echo smarty_function_math(array('equation' => "x+y",'x' => $this->_tpl_vars['campaign']['price'],'y' => $this->_tpl_vars['campaign']['shipping']), $this);?>
 <?php echo $this->_tpl_vars['campaign']['currency']; ?>
</b>
</p>
</div>
<a class="send js_submit buynow" data-pid='<?php echo $this->_tpl_vars['campaign']['product_id']; ?>
' data-campaign-uri='<?php echo $this->_tpl_vars['campaign']['uri']; ?>
' id="scroll_here_please" style="top:400px;">
						ΠΑΡΑΓΓΕΙΛΕΤΕ!
					</a>
</form>
<div id="time_time">
<p>Ως το τέλος της προσφοράς έμειναν:</p>
<ul id="time">
</ul>
</div>
</div>
</div>
<div class="footer">
<div class="opt clearfix">
<div>
<p></p>
</div>
</div>
</div>
</div>
</div>



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

<?php if (FALSE): ?>
<?php echo '
<script>
	$(function(){
		$(\'a\').click(function(e){
			e.preventDefault();

			window.onbeforeunload = null;

			//window.location.href = $(this).attr(\'href\');
		});
	});
	window.onbeforeunload =  function (e) {

		var confirmationMessage = \'************************** \\n  \\n **************************\';

		(e || window.event).returnValue = confirmationMessage; //Gecko + IE
		return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
	};
</script>
'; ?>

<?php endif; ?>

<?php echo $this->_tpl_vars['campaign']['track_landing']; ?>



</body>


</html>