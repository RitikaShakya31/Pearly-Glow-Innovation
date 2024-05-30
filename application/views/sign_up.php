<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
</head>

<body>
	<div class="row">
		<div class="col-md-6">
			<img style="object-fit: cover;" src="assets/img/register.png" alt="" width="100%" height="100%">
		</div>
		<div class="col-md-6" style="padding: 49px 79px 40px 63px;">
			<div>
				<h2 style="color:#19a1e3">Register </h2>
				<p>Please fill the information below</p>
			</div>
			<div class="contact-form mt-4">

				<form class="form" name="enq" method="POST" action="">
					<div class="row">
						<div class="form-group col-lg-12">
							<label>Name</label>
							<span class="form-icon"><i class="icofont icofont-user-alt-5"></i></span>
							<input name="name" class="form-control form-controlb" id="cname" required="required"
								placeholder="Enter Your Name" type="text">
						</div>
						<div class="form-group col-lg-12">
							<label>Email</label>
							<span class="form-icon"><i class="icofont icofont-envelope"></i></span>
							<input name="email" class="form-control form-controlb" id="cmail" required="required"
								placeholder="Enter Your Email" type="email">
						</div>
						<div class="form-group col-lg-12">
							<label>Number</label>
							<span class="form-icon"><i class="icofont icofont-telephone"></i></span>
							<input name="phone" class="form-control form-controlb" id="cnumber" required="required"
								placeholder="Enter Your Phone Number" type="text">
						</div>
						<div class="form-group col-lg-12">
							<label>Password</label>
							<span class="form-icon"><i class="icofont icofont-ui-email"></i></span>
							<input name="subject" class="form-control form-controlb" id="csubject" required="required"
								placeholder="Enter Your Password" type="text">
						</div>
						<a href="<?= base_url('login') ?>">
						<p class="sign-up-sec">Already have an account?  <span>Login Now</span></p>
						</a>
						<div class="form-group col-lg-12 mb0">
							<div class="actions">
								<input value="Submit" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg"
									title="Click here to submit your message!" type="submit">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>

</body>

</html>