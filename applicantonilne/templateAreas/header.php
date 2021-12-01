<body>
  <div id="applicantWrapper">
  <header id="mainHeader">
    <img src="assets/img/pcsd-logo-website-header-branding.png" alt="" />
  <h1>Applicant Online</h1>
    <nav class="topNav">
      <a href="index.php">Job Search</a>
      <?php
        if (empty($_SESSION['email'])) {
              ?>
              <a href="signup.php">Register to Apply</a>
              <a href="signin.php">Sign in to Apply</a>
              <?php

          }
        if (!empty($_SESSION['email'])) {
              ?>
              <a href="dashboard.php">Dashboard</a>
              <a href="logout.php">Sign Out</a>
              <?php

          }
      ?>
    </nav>
  </header>
