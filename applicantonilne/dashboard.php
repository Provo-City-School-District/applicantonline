<?php
	session_start();
	// Database connection
	include('config/db.php');
	if (empty($_SESSION['email'])) {
			header('Location: index.php');
		exit;
	}
?>
<!doctype html>

<html lang="en">
  <head>
	<title>Provo City School District Applicant Online</title>
	<?php include('templateAreas/head.php') ?>
  </head>
<?php include('templateAreas/header.php') ?>
	<aside class="loggedInUser">
		<h2 class="hidden">user profile information</h2>
		<p>Welcome Back <?php echo $_SESSION['firstname']. ' ' . $_SESSION['lastname']; ?></p>
	</aside>

<?php include('templateAreas/footer.php') ?>
