<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo SITENAME; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo URLROOT; ?>/css/sticky-footer.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/css/custombox.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/css/style.css" rel="stylesheet">

  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="<?php echo URLROOT;?>/">Nutrition</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/admins/index">Admin panel</a>
            </li>
          </ul>
          
          
          <ul class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['user_id'])) : ?>
            <li class="nav-item">
            <a class="nav-link" href="#">Hello <?php echo $_SESSION['user_name'];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT;?>/users/logout">Logout</a>
          </li>
            <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT;?>/users/login">Login</a>
          </li>
<?php endif; ?>
         </ul>
        </div>
      </nav>
    </header>