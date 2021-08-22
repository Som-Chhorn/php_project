<?php
require_once('header.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand text-white" href="">
      <img class="logos" src="https://www.freeiconspng.com/thumbs/number-1-png/metal-numbers-1-png-29.png" alt="">ONE STOP | ONE LIFE
      <ul class="navbar-nav mr-auto mt-2 mt-lg-10">
        <div class="#">
          <button type="button" class="btn btn-warning"><a href="process/create_social_html.php">+ Add</a></button>
        </div>
        <li class="nav-item active">
          <a class="nav-link font-weight-bold btn-outline-warning" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold btn-outline-warning" href="#">Dashboad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold btn-outline-warning" href="#">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold btn-outline-warning" href="#">Equiment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold btn-outline-warning" href="#">Report</a>
        </li>
      </ul>
      <form method="post" class="form-inline">
        <input class="form-control mr-sm-2" type="search" name="search_bar" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-white" type="submit"><a href="login/login.php"> Login</a></button>
      </form>
  </div>
</nav>
<?php
require_once('footer.php');
?>