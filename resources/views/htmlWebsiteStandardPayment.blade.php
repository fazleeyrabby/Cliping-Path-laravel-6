<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Website Payment Standard</title>
	<script type="text/javascript" language="javascript">
		function paypal_submit()
		{
		// var ActionName = 'https://www.paypal.com/cqi-bin/webscr';
        var ActionName = 'https://www.sandbox.paypal.com/cqi-bin/webscr';

        document.forms.frmOrderAutoSubmit.action=ActionName;
        document.forms.frmOrderAutoSubmit.submit();
		}
	</script>
</head>
<body onload="paypal_submit();">
	<form style="padding: 0px;margin: 0px;" name="frmOrderAutoSubmit" method="post">
		<?php
			$amount = $_SESSION['amount'];
			$first_name = $_SESSION['first_name'];
			$last_name = $_SESSION['last_name'];
			$quantity = $_SESSION['quantity'];
			$address = $_SESSION['address'];
			$item_name = $_SESSION['item_name'];
		?>	
		<input type="hidden" name="upload" value="1"> 
		<input type="hidden" name="cmd" value="_xclick"> 
		<input type="hidden" name="business" value="sb-1kjon950138@business.example.com">
		<!--topu1826@gmail.com -->

		<input type="hidden" name="quantity" value="{{ $quantity }}"> 
		<input type="hidden" name="item_name" value="{{ $item_name }}"> 
		<input type="hidden" name="amount" value="{{ $amount }}">

		<input type="hidden" name="rm" value="2"> 
		<input type="hidden" name="address_override" value="0"> 
		<input type="hidden" name="first_name" value="{{ $first_name }}">
		<input type="hidden" name="last_name" value="{{ $last_name }}">

		<input type="hidden" name="address" value="{{ $address }}"> 
		<input type="hidden" name="address2" value="0"> 
		<input type="hidden" name="city" value="">
		<input type="hidden" name="state" value="">
		<input type="hidden" name="zip" value="">


	</form>
</body>
</html>