<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Sentinel::getUser()->last_name }} {{ Sentinel::getUser()->first_name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="@if(Request::is('admin/dashboard')) active  @endif">
        <a href="{{ route('admin_dashboard') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview @if(Request::is('admin/add_plant') || Request::is('admin/view_plants')) active  @endif">
        <a href="#">
          <i class="fa fa-tree"></i>
          <span>Plants</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="@if(Request::is('admin/add_plant')) active  @endif"><a href="{{ route('plants.create') }}"><i class="fa fa-circle-o"></i> Add Plants</a></li>
          <li class="@if(Request::is('admin/view_plants') || Request::is('admin/view_plants')) active  @endif"><a href="{{ route('plants.index') }}"><i class="fa fa-circle-o"></i> View All Plants</a></li>
        </ul>
      </li>
      
      <li class="@if(Request::is('admin/plant_variants')) active  @endif">
        <a href="{{ route('variants.index') }}">
          <i class="fa fa-leaf"></i>
          <span>All Plant Variants</span>
        </a>
      </li>  

      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Layout Options</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
          <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
          <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
          <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
        </ul>
      </li>
      <li>
        <a href="pages/widgets.html">
          <i class="fa fa-th"></i> <span>Widgets</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">new</small>
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Charts</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
          <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
          <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
          <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
        </ul>
      </li>
      <li class="@if(Request::is('admin/my_profile')) active  @endif">
        <a href="{{ route('my_profile') }}">
          <i class="fa fa-user-circle"></i> <span>My Profile</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>