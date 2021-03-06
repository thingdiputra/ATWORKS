<!--file :sidebar.php -->

<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $user; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="index.php?page=dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <!--
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            -->
          </a>
          <!--
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
          -->
        </li>
        
        <li class="treeview">
          <a href="index.php?page=user">
            <i class="fa fa-user"></i>
            <span>User</span>
            <!-- SUPAYA ADA TANDA <
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            -->
          </a>
          <!--
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
          -->
        </li>
        <li class="treeview">
          <a href="index.php?page=departemen">
            <i class="fa fa-industry"></i>
            <span>Departemen</span>
            <!-- SUPAYA ADA TANDA <
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            -->
          </a>
          <!--
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
          -->
        </li>
        <li class="treeview">
          <a href="index.php?page=group">
            <i class="fa fa-group"></i> <span>Group</span>
            <!-- SUPAYA ADA TANDA <
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            -->
          </a>
           <!--
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
          -->
        </li>

        <li class="treeview">
          <a href="index.php?page=message">
            <i class="fa fa-envelope"></i> <span>Message</span>
            <!-- SUPAYA ADA TANDA <
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            -->
          </a>
          <!--
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
          -->
        </li>

        <li class="treeview">
          <a href="index.php?page=setting">
            <i class="fa fa-wrench"></i> <span>Settings</span>
            <!-- SUPAYA ADA TANDA <
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            -->
          </a>
          <!--
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
          -->
        </li>

        <li class="treeview">
          <a href="index.php?page=help">
            <i class="fa fa-question-circle"></i> <span>Help</span>
            <!-- SUPAYA ADA TANDA <
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            -->
          </a>
          <!--
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
          -->
        </li>
      </ul>

      </section>
  </aside>