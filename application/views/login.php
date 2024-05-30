<!DOCTYPE html>
<html lang="en">

<body>
	<div class="row">
		<div class="col-md-6">
			<img src="assets/img/login.png" alt="" width="100%">
		</div>
		<div class="col-md-6" style="padding: 163px 56px 0px 50px;">
			<div>
				<h2 style="color:#19a1e3">Login </h2>
			</div>
			<div class="contact-form mt-4">
				<form class="form" name="enq" method="POST" action="">
					<div class="row">
						<div class="form-group col-lg-12">
							<label>Email </label>
							<span class="form-icon"><i class="icofont icofont-envelope"></i></span>
							<input name="email" class="form-control form-controlb" id="cmail" required="required"
								placeholder="Enter Your Email" type="email">
						</div>
						<div class="form-group col-lg-12">
							<label>Password</label>
							<span class="form-icon"><i class="icofont icofont-ui-email"></i></span>
							<input name="subject" class="form-control form-controlb" id="csubject" required="required"
								placeholder="Enter Your Password" type="text">
						</div>
						<div>
							<a href="">
								<p class="forget-sec">Forgot Password ?</p>
							</a>
							<a href="<?= base_url('sign-up') ?>">
								<p class="sign-up-sec">You don't have an account? <span>Create Account</span></p>
							</a>
						</div>
						<div class="form-group col-lg-12 mb0">
							<div class="actions">
								<input value="Login" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg"
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