<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="http://localhost/private/index.php" class="brand-link">
		<img src="dist/img/logo.png" alt="delicious food secrets" class="" style="opacity: 1; margin-left: 16px;">
		<!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Alexander Pierce</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
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
					<a href="http://localhost/private/admin/index.php" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="./apointments.php" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Apointments</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="./users.php" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Users</p>
							</a>
						</li>

						<li class="nav-item menu-is-opening menu-open">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-book"></i>
								<p>
									Products
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview" style="display: block;">
								<li class="nav-item">
									<a href="./products.php" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Products List</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="./addproduct.php" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Add products</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>