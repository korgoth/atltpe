<?php

$allowed_order_data_fields = array('first_name', 'last_name', 'phone', 'email', 'city', 'zip', 'address', 'courier_note');

switch ($_GET['btn']) {
	case 'buynow':
		if (!$_POST['order_data']) {
			$errors[] = "order_data missing, check if your inputs have class 'order_data'!";	
		}
		if (!$_POST['campaign_uri']  || !is_numeric($_POST['campaign_uri']) || strlen($_POST['campaign_uri']) != 6) {
			$errors[] = "campaign_uri missing or wrong, check 'buynow' button data-campaign-uri attribute!";	
		}
		if (!$_POST['pid']  || !is_numeric($_POST['pid'])) {
			$errors[] = "pid missing or wrong, check 'buynow' button data-pid attribute!";	
		}

		parse_str($_POST['order_data'], $order_data);

		if (empty($order_data)) {
			$errors[] = "order_data array is empty! check if your inputs have 'order_data' class";	
		} else { 
			if (!$order_data['first_name']) {
				$errors[] = "Required field 'first_name' is missing!";	
			}
			if (!$order_data['phone']) {
				$errors[] = "Required field 'phone' is missing!";	
			}
		}

		//check if all fields in order_data are allowed
		foreach ($order_data as $key => $value) {
			if (!in_array($key, $allowed_order_data_fields)) {
				$errors[] = "'{$key}' field provided but is not allowed!";	
			}
		}


		if (!$errors) {
			$msg = "All required attributes found";	
		} else { 
			$msg = "There are errors in the template, please correct the following:";
		}
	break;

	case 'save_details':
		if (!$_POST['order_data']) {
			$errors[] = "order_data missing, check if your inputs have class 'order_data'!";	
		}
		if (!$_POST['oid']  || !is_numeric($_POST['oid'])) {
			$errors[] = "oid missing or wrong, check 'save_details' button data-oid attribute!";	
		}

		parse_str($_POST['order_data'], $order_data);

		//check if all fields in order_data are allowed
		foreach ($order_data as $key) {
			if (in_array($key, $allowed_order_data_fields)) {
				$errors[] = "'{$key}' field provided but is not allowed!";	
			}
		}


		if (!$errors) {
			$msg = "All required attributes found";	
		} else { 
			$msg = "There are errors in the template, please correct the following:";
		}
	break;
	
	default:
		$msg = "Invalid input";
		$errors[] = "You have access this file without permission";	
	break;
}

$return = array('status' => $errors ? 'error' : 'success', 'errors' => $errors, 'msg' => $msg);

print(json_encode($return));

