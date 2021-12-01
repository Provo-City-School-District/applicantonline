<?php
	// Database connection
	include('config/db.php');
?>
<!doctype html>

<html lang="en">
  <head>
	<title>Provo City School District Applicant Online</title>
	<?php include('templateAreas/head.php') ?>
  </head>
<?php include('templateAreas/header.php') ?>
	<section class="loggedInUser">
		<h2 class="hidden">user profile information</h2>
		<p>Welcome Back <?php echo $_SESSION['firstname']. ' ' . $_SESSION['lastname']; ?></p>
	</section>

<?php include('templateAreas/footer.php') ?>
