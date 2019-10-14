<!DOCTYPE html>
<html lang="en">

<?php
include('header.php')
?>

<body id="page-top">
  <?php include_once("nav.php") ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
    </ul>

    <div id="content-wrapper">
      <h1 id="ajaxTarget"></h1>
      <h2 id="ajaxTarget2"></h2>
      <button onclick="testAjax()">Test</button>
    </div>
    <!-- /.content-wrapper -->


  </div>
  <!-- /#wrapper -->
  <script>
    (function getContentAjax() {
      document.getElementById("ajaxTarget").textContent = "Hi"
    })()

    function testAjax() {
      var xhttp = new XMLHttpRequest();

      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("ajaxTarget2").innerHTML = this.responseText;
        }
      }

      xhttp.open("GET","?page=ajax&name=duc", true);
      xhttp.send();
    }
  </script>
  <!--Include footer-->
  <?php include_once("footer.php") ?>
  <!--End inclue footer-->
</body>

</html>