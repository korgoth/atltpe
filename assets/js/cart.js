$(function(){

	$('input').each(function(){
		if (!$(this).attr('placeholder') && $(this).attr('title')) {
			$(this).attr('placeholder', $(this).attr('title'));
		}
		if (!$(this).attr('title') && $(this).attr('placeholder')) {
			$(this).attr('title', $(this).attr('placeholder'));
		}
	});

	$('.order_data.required').each(function(){
		if ($(this).is('.mop_input')) {
			z = 99999;
		} else {
			z = 9998;
		}
		
		$(this).tooltipster({
			trigger: 'custom',
			repositionOnScroll: true,
			side: 'top',
			zIndex: z,
			timer: 3000
		});

	});

	var clickable = true;
	$('.buynow, #order_full_form').click(function(e){
		e.preventDefault();

		var dostop = false;

		$('.order_data.required').each(function(){
			if ($(this).val().length < 3) {
				$(this).addClass('alert-danger');
				if ($(this).is(':visible')) {
					$(this).tooltipster('show');
				}
				dostop = true;
			} else {
				if ($(this).is('[name=email]')) {
					var filter = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
					if (!filter.test($(this).val().trim())) {
						$(this).addClass('alert-danger');
						$(this).tooltipster('show');
						dostop = true;
					} else {
						$(this).removeClass('alert-danger');
						$(this).tooltipster('hide');
					}
				} else if ($(this).is('[name=phone]')) {
					var filter = /^(?=.*\d)[\d ]+$/;
					if (!filter.test($(this).val().trim())) {
						$(this).tooltipster('show');
						$(this).addClass('alert-danger');
						dostop = true;
					} else {
						$(this).tooltipster('hide');
						$(this).removeClass('alert-danger');
					}
				} else {
					$(this).removeClass('alert-danger');
					$(this).tooltipster('hide');
				}
			}
		});

		var btn = $(this);


		if (!dostop && clickable) {
			
				window.onbeforeunload = null;
				clickable = false;
				btn.unbind('click');
				//$('*').css({cursor: 'wait'});
				btn.val('').html('').css({background: 'url(//cdn4.qckcdn.com/c/loading.svg) center center no-repeat'})
				result = '';
				$.ajax({
					url: "check_input.php?btn=buynow",
					type: "POST",
					data: ({
						pid : btn.attr('data-pid'),
						campaign_uri: btn.attr('data-campaign-uri'),
						order_data: $('.order_data').serialize(),
					}),
					success: function(data){
						var response = $.parseJSON(data);
						console.log(response);
						if (response.status == 'success') {
							console.log('go');
							window.location.href = window.location.href.split('#')[0]+'&thank=1';
						} else {
							error_string = response.msg+"\n\n";
							for (var i = 0; i < response.errors.length; i++) {
								error_string += response.errors[i]+"\n";
							};
							alert(error_string);
						}
					},
					error: function(data) {
						console.log('err');
						console.log(data);
					}
				});	
		} else {
			if (btn.is('.buynow')) {
				//$('a[href*=#order]').click();
			}
		}
	});

	$('#save_details').click(function(e){
		e.preventDefault();
		var btn = $(this);

		var dostop = false;

		$('.order_data.required').each(function(){
			if ($(this).val().length < 3) {
				$(this).addClass('alert-danger');
				if ($(this).is(':visible')) {
					$(this).tooltipster('show');
				}
				dostop = true;
			} else {
				if ($(this).is('[name=email]')) {
					var filter = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
					if (!filter.test($(this).val().trim())) {
						$(this).addClass('alert-danger');
						dostop = true;
					} else {
						$(this).removeClass('alert-danger');
						$(this).tooltipster('hide');
					}
				} else if ($(this).is('[name=phone]')) {
					var filter = /^(?=.*\d)[\d ]+$/;
					if (!filter.test($(this).val().trim())) {
						$(this).tooltipster('show');
						$(this).addClass('alert-danger');
						dostop = true;
					} else {
						$(this).tooltipster('hide');
						$(this).removeClass('alert-danger');
					}
				} else {
					$(this).removeClass('alert-danger');
					$(this).tooltipster('hide');
				}
			}
		});


		if (!dostop) {
			$.post('check_input.php?btn=save_details', {
				oid: btn.attr('data-oid'),
				order_data: $('.order_data').serialize(),
			},
			function(data){
				var response = $.parseJSON(data);
				console.log(response);
				if (response.status == 'success') {
					console.log('go');
					btn.parent().hide();
					$('#thank_container').removeClass('hidden').show();
				} else {
					error_string = response.msg+"\n\n";
					for (var i = 0; i < response.errors.length; i++) {
						error_string += response.errors[i]+"\n";
					};
					alert(error_string);
				}
			});
		}

	});


	$('.order_data').keyup(function(){
		upd_all($(this));
	});
	
	$('.paytype_holder').click(function(){
		var radio = $(this).find('input[name=paytype]');
		// console.log(radio.attr('data-shipping'));
		$('span.shipping_holder').html(radio.attr('data-shipping'));
		$('span.grand_total_holder').html(radio.attr('data-total'));
	});

});


function upd_all(inp){
	$('input.order_data[name='+inp.attr('name')+']').not(inp).not('[type=radio]').val(inp.val());
}
