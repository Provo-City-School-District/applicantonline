<!doctype html>

<html lang="en">
  <head>
	<title>Provo City School District Applicant Online</title>
	<?php include('templateAreas/head.php') ?>
  </head>
<?php include('templateAreas/header.php') ?>
<!-- Login script -->
<?php include('controllers/login.php'); ?>
	<!-- Login form -->
		<div class="App">
			<div class="vertical-center">
				<div class="inner-block">
					<form action="" method="post">
						<h3>Login</h3>
						<?php echo $accountNotExistErr; ?>
						<?php echo $emailPwdErr; ?>
						<?php echo $verificationRequiredErr; ?>
						<?php echo $email_empty_err; ?>
						<?php echo $pass_empty_err; ?>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email_signin" id="email_signin" />
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password_signin" id="password_signin" />
						</div>

						<button type="submit" name="login" id="sign_in"
							class="btn btn-outline-primary btn-lg btn-block">Sign in</button>
					</form>
				</div>
			</div>
		</div>

<?php include('templateAreas/footer.php') ?>
