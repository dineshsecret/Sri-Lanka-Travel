<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">
	<head>
		<title>Acid.JS Web 2.0 Component Library  | HotelReservationForm.AJAX @ Martin Ivanov</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="Common/Styles/Styles.css"></link>
		<!-- import component's runtime libraries -->
		<?php include "HotelReservationForm.AJAX/HotelReservationForm.AJAX/Assets/HotelReservationForm.AJAX.Runtime.inc" ?>
		<!-- / import component's runtime libraries -->
		<script type="text/javascript">
		// initialize component
		ajaxhotelform.init({
			enabled: true,
			formdisabledtext: "<p>We are sorry, but we do not accept any reservations currently.</p><p>Please, check back later.</p>",
			skin: "Vista",
			booknowbuttontext: "Book Now",
			hotelname: "ACME Hotel",
			hotelemail: "reservations@acmehotel.com",
			hoteladminemail: "administrator@acmehotel.com",
			notificationemailsubject: "New Reservation with ACME Hotel",
			notificationmessagebody: "Hello!%0A%0AYou have received a new reservation. Please, check your admin.%0A%0AKind regards,%0AThe ACME Hotel Team.",
			confirmationmessagesubject: 'ACME Hotel Booking Confirmation',
			confirmationmessagebody: 'Dear customer,%0A%0AThank you for booking a room in our hotel. Your reservation will be confirmed soon.%0A%0AKind regards,%0AThe ACME Hotel Team.',
			printbuttontext: "Print Reservation",
			width: "600",
			paneheight: "300",
			nextbuttontext: "Next &raquo;",
			previousbuttontext: " &laquo; Back",
			ie6message: "<p>We are sorry for the inconvenience, but your browser (Internet Explorer 6) is not supported by our hotel reservation form.</p><p>To make a reservation, please use Internet Explorer 7, Internet Explorer 8, Mozilla FireFox, Opera, Apple Safari or Google Chrome.</p>",
			enablepaypal: false,
			paypaladdress: "payments@acmehotel.com",
			paypaltitle: "Book a room in ACME Hotel",
			paypalreturnpage: "http://acmehotel.com/thank-you/",
			paypalthankyoutext: "Thank you for booking a room in ACME Hotel!",
			paypalcurrency: "USD",
			paypalbuttontooltip: "Pay via PayPal",
			dateformat: "DD, d MM, yy"
		});
		</script>
	</head>
	<body>
		<div class="demoHeader">
			<h1><a href="index.php" title="HotelReservationForm.AJAX">HotelReservationForm.AJAX 5.0</a></h1>
			<div>
				<ul>
					<li><a href="http://acidjs.wemakesites.net/hotel-reservation-form-js.html" target="_blank" title="HotelReservationForm.AJAX Online">HotelReservationForm.AJAX Online</a></li>
					<li><a href="http://acidmartin.wemakesites.net/DownloadAdmin/click.php?id=116" title="Download">Download</a></li>
					<li><a href="http://acidjs.wemakesites.net/buy-software.html" title="Purchase Full Version" target="_blank">Purchase Full Version</a></li>
					<li><a href="http://acidjs.wemakesites.net/" title="Acid.JS Web 2.0 Component Libary" target="_blank">Acid.JS Web 2.0 Component Libary</a></li>
				</ul>
			</div>
		</div>
		<div class="demoContent">
			<p>HotelReservationForm.AJAX is a full featured AJAX solution for websites that provide online room reservations. It is skinnable, highly customizable, localizable, crossbrowser and ultra fast. The installation and the configuration of the script is easy, and your form can be up and running on your website within minutes.</p>
			<h3>HotelReservationForm.AJAX Demo</h3>
			<p>The latest version of HotelReservationForm.AJAX implements a step-by-step interface. Start typing your details in the first tab of the form. When all required fields (marked with an asterisk) are filled-in correctly, the next tab will be enabled and so on. You can open the reservations admin from <a href="HotelReservationForm.AJAX/Admin/" title="Open HotelReservationForm.AJAX Admin" target="_blank">this link</a>. The default login credentials for username and password is "admin".</p>
			<!-- render component's placeholder -->
			<?php include "HotelReservationForm.AJAX/HotelReservationForm.AJAX/Assets/HotelReservationForm.AJAX.PlaceHolder.inc" ?>
			<!-- / render component's placeholder -->
			<p>&nbsp;</p>
			<h3>Installation, Localization and Customization</h3>
			<p>Please, refer to the manual of the control for complete reference on installation, customization, localization and verything related to the control.</p>
		</div>
	</body>
</html>