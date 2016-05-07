<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="/assets/img/user7-128x128.jpg" class="img-circle" alt="User Image" />
    </div>
    <div class="pull-left info">
      @include('shared.current_user_info')
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search..."/>
      <span class="input-group-btn">
        <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </form>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="/">
          <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-gear"></i> <span>Data Setting</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class='treeview-menu'>
          {{-- <li><a href='/categorySettings'>Kategori Setting</a></li> --}}
          <li><a href='/settings'>Setting</a></li>
          {{-- <li><a href='/categoryClimbupSettings'>Kategori Climbup Setting</a></li> --}}
          <li><a href='/climbupSettings'>Climbup Setting</a></li>
          {{-- <li><a href='/categoryMaintenanceSettings'>Kategori Maintenance Setting</a></li> --}}
          <li><a href='/maintenanceSettings'>Maintenance Setting</a></li>
          <li><a href='/towerTensions'>Tegangan Tower</a></li>
          <li><a href='/trees'>Pohon</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-database"></i> <span>Data Penunjang</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class='treeview-menu'>
          <li><a href='/locations'>Wilayah</a></li>
          <li><a href='/roles'>Jabatan</a></li>
          <li><a href='/penghantars'>Penghantar</a></li>
          <li><a href='/apps'>APP</a></li>
        </ul>
      </li>
      {{-- <li class="treeview">
        <a href="/{{Config::get('app.admin_prefix')}}/membership_requests">
          <i class="fa fa-user-plus"></i> <span>Membership Request</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>
      <li class="treeview">
        <a href="/{{Config::get('app.admin_prefix')}}/member_roles">
          <i class="fa fa-unlock"></i> <span>Member Role</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li> --}}
        <li class="treeview">
          <a href="/towers">
            <i class="fa fa-magnet"></i> <span>Tower</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class='treeview-menu'>
            <li><a href='/towers'>Manage Tower</a></li>
            <li><a href='/report/tower/wheather'>Ramalan Cuaca Tower</a></li>
            <li><a href='/report/tower/history'>History Tower</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="/climbups">
            <i class="fa fa-tasks"></i> <span>Climbup</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li class="treeview">
          <a href="/maintenances">
            <i class="fa fa-newspaper-o"></i> <span>Maintenance</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li class="treeview">
          <a href="/tesIsolators">
            <i class="fa fa-check-square"></i> <span>Tes Isolator</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class='treeview-menu'>
            <li><a href='/tesIsolators'>Input Tes Isolator</a></li>
            <li><a href='/report/isolator/realisation'>Realisasi Tes Isolator</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-eyedropper"></i> <span>Thermo Vision</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class='treeview-menu'>
            <li><a href='/thermoVisions'>Input Thermo Vision</a></li>
            <li><a href='/report/thermo/realisation'>Realisasi Thermo Vision</a></li>
            <li><a href='/report/thermo/result'>Laporan Thermo Vision</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fire"></i> <span>ROW</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class='treeview-menu'>
            <li><a href='/rows'>Input Row</a></li>
            <li><a href='/report/row/recomendation'>Rekomendasi Row</a></li>
            <li><a href='/report/row/realisation'>Realisasi ROW</a></li>
            <li><a href='/report/row/anomali'>Laporan Kerawanan Row</a></li>
            <li><a href='/report/row/result'>Laporan Rekap Row</a></li>
          </ul>
        </li>
        {{-- <li class="treeview">
          <a href="/{{Config::get('app.super_admin_prefix')}}/polls">
            <i class="fa fa-gamepad"></i> <span>Poll</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li class="treeview">
          <a href="/{{Config::get('app.super_admin_prefix')}}/users">
            <i class="fa fa-child"></i> <span>User</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li> --}}
        <li class="treeview">
          <a href="{{ url('/logout') }}">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
  </ul>
</section>
