	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu" data-widget="tree">
		<li class="header">MAIN NAVIGATION</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-user"></i> <span>Profile</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/view-profile') }}"><i class="fa fa-circle-o"></i> View Profile</a></li>
				<li><a href="{{ url('/edit-profile') }}"><i class="fa fa-circle-o"></i> Edit Profile</a></li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-connectdevelop"></i> <span>Raw Materials</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/view-rawmaterials') }}"><i class="fa fa-circle-o"></i> View Materials</a></li>
				<li><a href="{{ url('/add-rawmaterials') }}"><i class="fa fa-circle-o"></i> Add Materials</a></li>
				<li><a href="{{ url('/deleted-rawmaterials') }}"><i class="fa fa-circle-o"></i> Deleted Materials</a></li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-flask"></i> <span>Stock</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/view-daily-stock') }}"><i class="fa fa-circle-o"></i> View Daily Stock</a></li>
				<li><a href="{{ url('/view-all-stock') }}"><i class="fa fa-circle-o"></i> View All Stock</a></li>
				<li><a href="{{ url('/search') }}"><i class="fa fa-circle-o"></i> Search Stock</a></li>
				<li><a href="{{ url('/deleted-stock') }}"><i class="fa fa-circle-o"></i> Deleted Stock</a></li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-cube"></i> <span>Feed</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/add-feed') }}"><i class="fa fa-circle-o"></i> Create New Feed</a></li>
				<li><a href="{{ url('/create-new-feed') }}"><i class="fa fa-circle-o"></i> Add Feed</a></li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-book"></i> <span>Accounts</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/view-accounts') }}"><i class="fa fa-circle-o"></i> View Accounts</a></li>
				<li><a href="{{ url('/add-accounts') }}"><i class="fa fa-circle-o"></i> Add Accounts</a></li>
				<li><a href="{{ url('/deleted-accounts') }}"><i class="fa fa-circle-o"></i> Deleted Accounts</a></li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-male"></i> <span>Clients</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/view-clients') }}"><i class="fa fa-circle-o"></i> View Clients</a></li>
				<li><a href="{{ url('/add-clients') }}"><i class="fa fa-circle-o"></i> Add Clients</a></li>
				<li><a href="{{ url('/deleted-clients') }}"><i class="fa fa-circle-o"></i> Deleted Clients</a></li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-users"></i> <span>Employees</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/view-employees') }}"><i class="fa fa-circle-o"></i> View Employees</a></li>
				<li><a href="{{ url('/add-employees') }}"><i class="fa fa-circle-o"></i> Add Employees</a></li>
				<li><a href="{{ url('/deleted-employees') }}"><i class="fa fa-circle-o"></i> Deleted Employees</a></li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-dollar"></i> <span>Sales</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/view-sales') }}"><i class="fa fa-circle-o"></i> View Sales</a></li>
				<li><a href="{{ url('/add-sales') }}"><i class="fa fa-circle-o"></i> Add Sales</a></li>
				<li><a href="{{ url('/deleted-sales') }}"><i class="fa fa-circle-o"></i> Deleted Sales</a></li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-user"></i> <span>Users</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/view-users') }}"><i class="fa fa-circle-o"></i> View Users</a></li>
				<li><a href="{{ url('/add-users') }}"><i class="fa fa-circle-o"></i> Add Users</a></li>
				<li><a href="{{ url('/deleted-users') }}"><i class="fa fa-circle-o"></i> Deleted Users</a></li>
			</ul>
		</li>
	</ul>
</section>