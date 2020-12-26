
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Request Now</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= BASEURL; ?>/asset3/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/noui/nouislider.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form method="post" action="<?= BASEURL;?>/Pelanggan/addOrder" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Request Now
				</span>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="nama" placeholder="Enter Your Name">
				</div>
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Phone (*terdaftar pada Whatsapp)</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Needed Services *</span>
					<div>
						<select class="js-select2" name="service">
							<option id="konstruksi" name="services[]" value="1" CHECKED>Konsultasi Kontruksi</option>
							<option id="denah" name="services[]" value="2">Konsultasi Denah</option>
							<option id="desain" name="services[]" value="3">Konsep Desain</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="w-full dis-none js-show-service">
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">What type of building do you want?</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="house" type="radio" name="building[]" value="house" checked="checked">
							<label class="label-radio100" for="house">
								House
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="apartment" type="radio" name="building[]" value="apartment">
							<label class="label-radio100" for="apartment">
								Apartment
							</label>
						</div>
						<div class="wrap-contact100-form-range">
							<span class="label-input100">Budget *</span>
							<div class="contact100-form-range-value">
								$<span id="value-lower">610</span> - $<span id="value-upper">980</span>
								<input type="text" name="from-budget" value="budget">
								<input type="text" name="to-budget" value="budget">
							</div>
							<div class="contact100-form-range-bar">
								<div id="filter-bar"></div>
							</div>
						</div>
					</div>

					<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Location">
						<span class="label-input100">Location (*city) *</span>
						<input class="input100" type="text" name="location" placeholder="Enter Your Location">
					</div>

					<div class="wrap-input100 validate-input bg1" data-validate="Please Type Timeline">
						<span class="label-input100">Timeline (*months) *</span>
						<input class="input100" type="text" name="timeline" placeholder="Enter Your Timeline">
					</div>

					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Please Type Your Message">
						<span class="label-input100">Message</span>
						<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					</div>

					<div class="container-contact100-form-btn">
						<button type="submit" class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
			</form>
		</div>
	</div>



	<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/asset3/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/asset3/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/asset3/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= BASEURL; ?>/asset3/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/asset3/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function() {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function() {
				$(this).on('select2:close', function(e) {
					if ($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					} else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/asset3/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= BASEURL; ?>/asset3/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/asset3/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/asset3/vendor/noui/nouislider.min.js"></script>
	<script>
		var filterBar = document.getElementById('filter-bar');

		noUiSlider.create(filterBar, {
			start: [1500, 3900],
			connect: true,
			range: {
				'min': 1500,
				'max': 7500
			}
		});

		var skipValues = [
			document.getElementById('value-lower'),
			document.getElementById('value-upper')
		];

		filterBar.noUiSlider.on('update', function(values, handle) {
			skipValues[handle].innerHTML = Math.round(values[handle]);
			$('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
			$('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

</body>

</html>