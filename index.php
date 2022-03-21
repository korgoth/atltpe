<?php
error_reporting(E_ERROR);
require('config.php');
require('lib/Loader.class.php');
require('lib/Preview.class.php');

$preview = new Preview();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Template preview</title>
  </head>
  <body>

	<form action="preview.php" id='preview_form'>
	<div class='container my-4'>
		<h1 class='text-center'>Template preview engine</h1>
		<div class='row'>
			<div class='col-xs-12 col-sm-6'>
				<h4>Mock Campaign Params</h4>
				<hr>
				<div class='row'>
					<div class='col text-danger'>
							<strong>Preview</strong><br>
							<label>
								<input type='radio' class='form-control-inline' name='tpl_type' value='blog'checked=checked />
								Prelander/Blog
							</label>
							&nbsp; &nbsp; &nbsp; 
							<label>
								<input type='radio' class='form-control-inline' name='tpl_type' value='order'   />
								Landing/Order
							</label>

							<div class='blog_templates_holder'>
								<strong>Blog Template</strong>
								<select name='blog_template' class='form-control alert-danger'>
									<option value="">--</option>
									<?php foreach($preview->get_templates(BLOG_TEMPLATES_PATH) AS $product => $templates): ?>
									<optgroup label="<?= $product ?>">
										<?php foreach($templates AS $template => $langs): ?>
										<option value="<?= $product ?>/<?= $template ?>" data-langs='<?= json_encode($langs) ?>'>
											<?= $product ?> - <?= $template ?> (<?= implode(',', $langs) ?>)
										</option>
										<?php endforeach; ?>
									</optgroup>
									<?php endforeach; ?>
								</select>
							</div>
							<div class='order_templates_holder d-none'>
								<strong>Order Template</strong>
								<select name='order_template' class='form-control alert-danger'>
									<option value="">--</option>
									<?php foreach($preview->get_templates(ORDER_TEMPLATES_PATH) AS $product => $templates): ?>
									<optgroup label="<?= $product ?>">
										<?php foreach($templates AS $template => $langs): ?>
											<option value="<?= $product ?>/<?= $template ?>" data-langs='<?= json_encode($langs) ?>'>
												<?= $product ?> - <?= $template ?> (<?= implode(',', $langs) ?>)
											</option>
										<?php endforeach; ?>
									</optgroup>
									<?php endforeach; ?>
								</select>
							</div>

							<div class='country pt-2'>
								<strong>Country/Language</strong><br>
								<div class='country_store'>
									--
								</div>
							</div>
					</div>
				</div>
				<hr>
				<div class='row'>
					<div class='col'>
						<label><strong>Price</strong></label>
						<input type='text' name='price' class='form-control' placeholder='ex: 55.25' />
					</div>
					<div class='col'>
						<label><strong>Shipping</strong></label>
						<input type='text' name='shipping' class='form-control' placeholder='ex: 5.25' />
					</div>
					<div class='col'>
						<label><strong>Currency</strong></label>
						<input type='text' name='currency' class='form-control' placeholder='ex: EUR' />
					</div>
				</div>
				<hr>	
				<div class='row'>
					<div class='col'>
						<label><strong>Template Settings</strong></label>	<small><a href='#' id='toggle-settings'>toggle advanced settings</a></small>
						<div class='settings d-none'>
							<div class='row'>
								<div class='col'>
									<label><strong>MouseOut</strong></label>
									<select class='form-control' name='mouseout_popup'>
										<option value='1'>On</option>
										<option value='0'>Off</option>
									</select>
								</div>
								<div class='col'>
									<label><strong>Last Buyers</strong></label>
									<select class='form-control' name='last_buyers'>
										<option value='1'>On</option>
										<option value='0'>Off</option>
									</select>
								</div>
								<div class='col'>
									<label><strong>Exit Popup</strong></label>
									<select class='form-control' name='exit_popup'>
										<option value='1'>On</option>
										<option value='0' selected='selected'>Off</option>
									</select>
								</div>
								<div class='col'>
									<label><strong>BackJS</strong></label>
									<select class='form-control' name='back_js'>
										<option value='1'>On</option>
										<option value='0' selected='selected'>Off</option>
									</select>
								</div>
							</div>
							<div class='row'>
								<div class='col'>
									<label><strong>a#href external</strong></label>
									<select class='form-control' name='last_buyers'>
										<option value='1'>On</option>
										<option value='0' selected=>Off</option>
									</select>
								</div>
								<div class='col'></div>
								<div class='col'></div>
							</div>
						</div>
					</div>
				</div>

				<hr>
				<div class='row'>
					<div class='col'>
						<label><strong>Pixels</strong></label>	<small><a href='#' id='toggle-pixels'>toggle pixel fields</a></small>
						<div class='pixels d-none'>
							<div class='row'>
								<div class='col'>
									<label><strong>Track </strong><span class='badge badge-info'>(click/prelanding)</span></label>
									<textarea name='track_click' class='form-control' placeholder="&lt;!-- track_click --&gt;"></textarea>
								</div>
							</div>
							<div class='row'>
								<div class='col'>
									<label><strong>Track </strong><span class='badge badge-info'>(landing)</span></label>
									<textarea name='track_landing' class='form-control' placeholder="&lt;!-- track_landing --&gt;"></textarea>
								</div>
							</div>
							<div class='row'>
								<div class='col'>
									<label><strong>Track </strong><span class='badge badge-info'>(sale)</span></label>
									<textarea name='track_sale' class='form-control' placeholder="&lt;!-- track_sale --&gt;"></textarea>
								</div>
							</div>
							<div class='row'>
								<div class='col'>
									<label><strong>Getparams</strong></label>
									<input name='getparams' class='form-control' placeholder='ex: key1=value1&key2=value2' />
								</div>
							</div>
						</div>
					</div>
				</div>		
				<hr>
				<div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='checkbox' id='target' name='target' value='_blank' checked='checked'>
						<label class='form-check-label' for='target'>Open in new window</label>
					</div>
					<div class='form-check form-check-inline'>
						<input class='form-check-input' type='checkbox' id='force_mobile' name='force_mobile' value='1'>
						<label class='form-check-label' for='force_mobile'>Force mobile</label>
					</div>
					<br><br>
					<button type="submit" class='btn btn-lg btn-success btn-block'>Preview</button>

					<hr>
					Public preview link (assuming changes have been synced):
					<textarea id='preview_link' class='form-control' rows=8 onclick="this.select()"></textarea>
				</div>
			</div>

			<div class='col-xs-12 col-sm-6 pt-xs-2'>
				<h4>Instructions for use</h4>
				<hr>
				<p><strong><em>Please read this desccription thru the end and make sure that you fully understand each aspect of it before proceeding</em></strong></p>
				<p>
					The dropdown on the left contains all the blog/order templates that are visible by the system. If you need to add new templates check the "File paths and file names" section below. </p>
				<p>
					In order to generate a preview you should select what type of template you wish to be rendered and select the template from the dropdown (if the template is not visilbe check the "file paths and file names" section below). After selecting the templates available languages are diaplayed under the dropdown - select the desired language and click the green "Preview" button. </p>
				<p> 
					If needed you can adjust the parameteres below that to preview different scenarios for each template
				</p>

				<p>
					NOTE: the <em>Force mobile</em> checkbox forces the display of a mobile-only html of the template (of such is present). Those HTMLs are usually present for older templates as most of the new ones are responsive and there is only one HTML that handles both mobile and desktop. With that said - dont be surprised if you click the <em>Force mobile</em> option and the template looks the same as desktop, as that is the expected behavior for most templates.
				</p>
				<h5>File paths and file names:</h5>
				<ul>
					<li>
						<strong>By default templates are stored in the <code>'templates'</code> folder </strong>as follows: 
						<ul>
							<li><em>blog</em> templates are stored in <code>'templates/blog-templates'</code></li>
							<li><em>order</em> templates are stored in the <code>'templates/order-templates'</code></li>
						</ul>
					</li>

					<li>
						<strong>Directory structure should follow the following pattern:</strong> <code>PRODUCT_NAME/TEMPLATE_NAME/LANGUAGE</code>. Examples for blog and order: 
						<ul>
							<li>
								<em>blog</em> template for <em>FlexOptima</em> called <em>HealthInstitute</em> for <em>BG</em> should be located at <code>templates/blog-templates/FLEXOPTIMA/HealthInstitute/BG</code> 
							</li>
							<li>
								<em>order</em> template for <em>FlexOptima</em> called <em>FlexOptima-J</em> for <em>BG</em> should be located at <code>templates/order-templates/FLEXOPTIMA/FlexOptima-J/BG</code> 
							</li>
						</ul>	
					</li>

					<li>
						<strong>In each <em>LANGUAGE</em> folder an <code>index.php</code> file is expected for <em>blog templates</em> and both <code>index.html</code> and <code>thank.html</code> files are expected for <em>order templates</em></strong>
					</li>
					<li>
						<strong>File paths in the templates should be defined as follows:</strong>
						<ul>
							<li>
								For <em>blog templates</em> all resources (images, js, css, fonts, etc..) should be defined as: <code>&lt;?= $assets_url ?&gt;/PATH_TO_RESOUCE</code>. For example an image located in the template at <code>img/logo.png</code> should be referenced in the template as: <code>&lt;?= $assets_url ?&gt;/img/logo.png</code>
							</li>
							<li>
								For <em>order templates</em> all resources (images, js, css, fonts, etc..) should be defined as: <code>{$cdn}/{$template}/PATH_TO_RESOUCE</code>. For example an image located in the template at <code>img/logo.png</code> should be referenced in the template as: <code>{$cdn}/{$template}/img/logo.png</code>							</li>
						</ul>	
					</li>

				</ul>
			</div>
		</div>
	</div>
	</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script>
		$(function(){
			$('form').attr('target', $('input[name=target]').is(':checked') ? $('input[name=target]').val() : '');
			$('input[name=target]').change(function(){
				$('form').attr('target', $(this).is(':checked') ? $(this).val() : '');
			});

			$('#toggle-pixels').click(function(e){
				e.preventDefault();
				$('div.pixels').toggleClass('d-none');
			});
			$('#toggle-settings').click(function(e){
				e.preventDefault();
				$('div.settings').toggleClass('d-none');
			});

			$('input[name=tpl_type]').change(function(e){
				$('div.blog_templates_holder, div.order_templates_holder').addClass('d-none');
				$('div.'+$(this).val()+'_templates_holder').removeClass('d-none');
			});

			$('select[name=blog_template], select[name=order_template]').change(function(){
				country_store = $('.country_store');
				if ($(this).val() != '') {
					country_store.html('');
					default_selected = false;
					$(this).find('option:selected').data('langs').forEach(function(lang) {
						country_store.append("\
												<div class='form-check form-check-inline'>\
													<input class='form-check-input' type='radio' name='country' id='country_"+lang+"' value='"+lang+"'>\
													<label class='form-check-label' for='country_"+lang+"'>"+lang+"</label>\
												</div>\
											");
					});

					if (!default_selected) {
						country_store.find('input:first').attr('checked', true);
					}

				} else { 
					country_store.html('--');
				}

			});

			$('div.settings select, select[name=blog_template], select[name=order_template]').change(function(e){
				update_preview_link();
			});
			$('div.pixels input, input[name=price], input[name=shipping], input[name=currency]').blur(function(e){
				update_preview_link();
			});
		});

		function update_preview_link() {
			if (
				($('input[name=tpl_type]:checked').val() == 'blog' && $('select[name=blog_template]').val() != '')
				||
				($('input[name=tpl_type]:checked').val() == 'order' && $('select[name=order_template]').val() != '')
			)
			{
				var lnk = "<?= PREVIEW_URL ?>"+$('form#preview_form').serialize();
				lnk = lnk.replace(/&/g, "&amp;");
				$('#preview_link').html(lnk);

			}
		}
	</script>
  </body>
</html>
