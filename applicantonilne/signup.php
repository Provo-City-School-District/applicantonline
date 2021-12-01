
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
					<div class="form-group">
						<label>First name</label>
						<input type="text" class="form-control" name="firstname" id="firstName" />
					</div>

					<div class="form-group">
						<label>Last name</label>
						<input type="text" class="form-control" name="lastname" id="lastName" />
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" id="email" />
					</div>

					<div class="form-group">
						<label>Mobile</label>
						<input type="text" class="form-control" name="mobilenumber" id="mobilenumber" />
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" id="password" />
					</div>

					<button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">
						Sign up
					</button>
				</form>
			</div>
		</div>
	</div>

<?php include('templateAreas/footer.php') ?>
