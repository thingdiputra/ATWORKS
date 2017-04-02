<!--file :navbar.php -->

<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><h6>atWorks</h6></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>atWorks</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user; ?></span>
            </a>
            <ul class="dropdown-menu">              
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                  <?php echo $user; ?>
                  <small><?php echo $role; ?></small>
                </p>
              </li>
              <li class="user-body">
                <div class="col-xs-12 text-center">
                  <a href="admin/logout.php" class="btn btn-info">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>