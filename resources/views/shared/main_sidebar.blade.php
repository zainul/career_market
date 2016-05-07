<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="/assets/img/avatar5.png" class="img-circle" alt="User Image" />
    </div>
    <div class="pull-left info">
      @include('shared.current_user_info')
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="/">
          <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <a href="/jobs">
          <i class="fa fa-plus"></i> <span>Jobs</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <a href="/questions">
          <i class="fa fa-question"></i> <span>Question</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>
        <li class="treeview">
          <a href="{{ url('/logout') }}">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
  </ul>
</section>
