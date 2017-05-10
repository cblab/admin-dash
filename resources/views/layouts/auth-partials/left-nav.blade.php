<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ Gravatar::get(Auth::user()->email)  }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
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

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            @if(Auth::user()->isAdmin())
            <li><a href="/admin"><i class="fa fa-dashboard"></i>
                     <span>Admin</span></a></li>
            @endif
            <li><a href="/home"><i class="fa fa-dashboard"></i><span>Company Stock Overview</span></a></li>
            <li><a href="/highest-market-prices"><i class="fa fa-dashboard"></i><span>Highest Market Prices</span></a></li>
            <li><a href="/create-company"><i class="fa fa-dashboard"></i><span>Create Company Profile</span></a></li>
            <li><a href="/create-stock"><i class="fa fa-dashboard"></i><span>Add Company Stock</span></a></li>
            <li><a href="/create-order"><i class="fa fa-dashboard"></i><span>Manage orders/trades</span></a></li>
            <li><a href="/determine-profile-route"><i class="fa fa-user"></i> <span>Profile</span></a></li>
            <li><a href="/settings"><i class="fa fa-wrench"></i> <span>Account Settings</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-archive"></i> <span>Content</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>