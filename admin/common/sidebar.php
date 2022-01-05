<?php
  require_once('../core/dbconnection.php');
  $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $current_page = str_replace($url."admin/", "", $current_url); 
  if($_SESSION['ADMIN_LOGIN'] != "yes") {
    header("Location: http://localhost/Dits-Website/admin/");
  }
?>


<div class="sidebar-offcanvas">
  <a class="navbar-brand mb-2 px-2" href="#">
    <img src="assets/images/logo.png" alt="image">
  </a>
  <div class="sidebar-menu">
    <ul class="nav flex-column">
      <li class="nav-item <?php echo $current_page == '/admin/dashboard' ? 'active':'' ?>">
        <a class="nav-link" href="dashboard">
          <i class="fa fa-tachometer"></i>
          <div class="text">Dashboard</div>
        </a>
      </li>
      <li class="nav-item <?php echo $current_page == '/admin/metatags' ? 'active':'' ?>">
        <a class="nav-link" href="metatags">
          <i class="fa fa-file"></i>
          <div class="text">Meta Tags</div>
        </a>
      </li>
      <li class="nav-item sub-menu <?php echo $current_page == '/admin/portfolio' ? 'active':'' ?>">
          <a class="nav-link" href=javascript:void(0)">
          <i class="fa fa-tty"></i>
            <div class="text">Portfolio</div>
            <span class="right"><i class="fa fa-angle-down"></i></span>
          </a>
          <ul class="innerMenus">
              <li><a href="portfolio">Portfolio Listing</a></li>
              <li><a href="category">Category</a></li>
              <li><a href="tags">Tags</a></li>
          </ul>
      </li>
      <li class="nav-item <?php echo $current_page == '/admin/blogs' ? 'active':'' ?>">
        <a class="nav-link" href="blogs">
          <i class="fa fa-file"></i>
          <div class="text">Blogs</div>
        </a>
      </li>
            <li class="nav-item <?php echo $current_page == '/admin/contact' ? 'active':'' ?>">
        <a class="nav-link" href="contact">
          <i class="fa fa-file"></i>
          <div class="text">Contact</div>
        </a>
      </li>
    </ul>
  </div>
</div>