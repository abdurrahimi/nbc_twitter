<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo isset($this->params['dashboard']) ?  $this->params['dashboard'] : '' ?>">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
		<li class="nav-item <?php echo isset($this->params['admin']) ?  $this->params['admin'] : '' ?>"> 
        <a class="nav-link collapsed" href="index.php?r=admin">
          <i class="fas fa-fw fa-cog"></i>
          <span>Admin</span>
        </a>
      </li>
      <li class="nav-item <?php echo isset($this->params['training']) ?  $this->params['training'] : '' ?>">
        <a class="nav-link collapsed" href="index.php?r=twitter/training">
          <i class="fas fa-fw fa-cog"></i>
          <span>Training Data</span>
        </a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo isset($this->params['twitter']) ?  $this->params['twitter'] : '' ?>">
        <a class="nav-link collapsed" href="index.php?r=twitter">
          <i class="fas fa-fw fa-cog"></i>
          <span>Analisa Twitter</span>
        </a>
      </li>
      

      <!-- Nav Item - Utilities Collapse Menu -->
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>