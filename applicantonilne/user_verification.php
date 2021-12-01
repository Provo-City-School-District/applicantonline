<?php include('controllers/user_activation.php'); ?>
<!doctype html>

<html lang="en">
  <head>
	<title>Provo City School District Applicant Online</title>
	<?php include('templateAreas/head.php') ?>
  </head>
<?php include('templateAreas/header.php') ?>
	<div class="container">
			<div class="jumbotron text-center">
				<h1 class="display-4">User Email Verification Demo</h1>
				<div class="col-12 mb-5 text-center">
					<?php echo $email_already_verified; ?>
					<?php echo $email_verified; ?>
					<?php echo $activation_error; ?>
				</div>
				<p class="lead">If user account is verified then click on the following button to login.</p>
				<a class="btn btn-lg btn-success" href="https://sandbox.provo.edu/applicantOnline/index.php"
				   >Click to Login
				</a>
			</div>
		</div>
<?php include('templateAreas/footer.php') ?>
