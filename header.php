 <!-- start header -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $metaName; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $pageTitle ?></title>
  </head>
  <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Downloader</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item <?php if ($pageName == 'home') {echo 'active';} ?>">
                <a class="nav-link text-capitalize" href="index.php">home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item <?php if ($pageName == 'about') {echo 'active';} ?>">
                <a class="nav-link text-capitalize" href="about.php">about us</a>
              </li>
              <li class="nav-item <?php if ($pageName == 'contact') {echo 'active';} ?>">
                <a class="nav-link text-capitalize" href="contact.php">contact us</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>