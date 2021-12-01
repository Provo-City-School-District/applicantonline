
<?php include('controllers/register.php'); ?>
<!doctype html>

<html lang="en">
  <head>
	<title>Provo City School District Applicant Online</title>
	<?php include('templateAreas/head.php') ?>
  </head>
<?php include('templateAreas/header.php') ?>


	<div class="App">
		<div class="vertical-center">
			<div class="inner-block">
				<form action="" method="post">
					<h2>Register</h2>
						<?php echo $success_msg; ?>
						<?php echo $email_exist; ?>

						<?php echo $email_verify_err; ?>
						<?php echo $email_verify_success; ?>
					<div class="form-group">
						<label>First name</label>
						<input type="text" class="form-control" name="firstname" id="firstName" />
						<?php echo $fNameEmptyErr; ?>
						<?php echo $f_NameErr; ?>
					</div>

					<div class="form-group">
						<label>Last name</label>
						<input type="text" class="form-control" name="lastname" id="lastName" />
						<?php echo $l_NameErr; ?>
						<?php echo $lNameEmptyErr; ?>
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" id="email" />
						<?php echo $_emailErr; ?>
						<?php echo $emailEmptyErr; ?>
					</div>

					<div class="form-group">
						<label>Mobile</label>
						<input type="text" class="form-control" name="mobilenumber" id="mobilenumber" />
						<?php echo $_mobileErr; ?>
						<?php echo $mobileEmptyErr; ?>
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" id="password" />
						<?php echo $_passwordErr; ?>
						<?php echo $passwordEmptyErr; ?>
					</div>

					<button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">
						Sign up
					</button>
				</form>
			</div>
		</div>
	</div>

<?php include('templateAreas/footer.php') ?>
