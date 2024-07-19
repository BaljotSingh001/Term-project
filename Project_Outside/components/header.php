<!-- <ul class="navbar navbar-expand-lg bg-body-tertiary">
  <li class="nav-item">
    <a class="nav-link" href="../pages/home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../pages/about.php">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../pages/booking-page.php">Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../pages/contact-page.php">Contact</a>
  </li>
  <li class="nav-item">
    <button class="btn" id="logout">Log Out</button>
  </li>
</ul> -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="./home.php?first_name=<?php echo urlencode($_GET['first_name']); ?>&id=<?php echo urlencode($_GET['id']); ?>">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./about.php?first_name=<?php echo urlencode($_GET['first_name']); ?>&id=<?php echo urlencode($_GET['id']); ?>">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../pages/booking-page.php?first_name=<?php echo urlencode($_GET['first_name']); ?>&id=<?php echo urlencode($_GET['id']); ?>">Book</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../pages/contact-page.php?first_name=<?php echo urlencode($_GET['first_name']); ?>&id=<?php echo urlencode($_GET['id']); ?>">Contact</a>
        </li>
        <li class="nav-item">
            <button class="btn" id="logout">Log Out</button>
        </li>
      </ul>
    </div>
  </div>
</nav>