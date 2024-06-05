    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="backend/dist/img/module_table_bottom.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <br>
            <span class="brand-text font-weight text-white text-xl-end border-bottom border-white ">El estanco de nando</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->

            <!-- SidebarSearch Form -->
            <br>
            
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="home" class="nav-link active">
                            <i class="nav-icon fas fa-home nav-icon"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa-regular fa-folder-open"></i>
                            <p class="ml-2">
                                Options
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('clients.index')}}" class="nav-link">
                                    <i class="fa fa-user nav-icon"></i>
                                    <p>Client</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                
                                <a href="{{route('products.index')}}" class="nav-link">
                                    <i class="fa fa-beer nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('orders.index')}}" class="nav-link">
                                    <i class="fa fa-shopping-cart nav-icon"></i>
                                    <p>Order</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>