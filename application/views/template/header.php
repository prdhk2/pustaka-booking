<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- fontawesome link -->
	<link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css'); ?>"> 

	<link rel="stylesheet" href="<?= base_url('assets/bootstrap5/css/bootstrap.min.css'); ?>">

	<link rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?>">

	<title><?= $title; ?></title>

</head>
<body>
<!-- Navbar -->
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" onclick="openNav()" id="sidebarToggle">
          <span class="navbar-toggler-icon"></span>
      </button>

        <a class="navbar-brand" href="<?= base_url('Home/index'); ?>">
            Pustaka Booking
        </a>
        <div>
            Halo, <?= $users['name']; ?>
        </div>
    </div>
</nav>
