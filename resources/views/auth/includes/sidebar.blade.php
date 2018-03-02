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
				<li><a href="{{ url('/view-profile') }}"><i class="fa fa-circle-o"></i> View User Profile</a></li>
				<li><a href="{{ url('/edit-profile') }}"><i class="fa fa-circle-o"></i> Edit User Profile</a></li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-connectdevelop"></i> <span>Blood Donation</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/search-BG') }}"><i class="fa fa-circle-o"></i> Select Bloodgroup</a></li>
			<	<li><a href="{{ url('/donors-list') }}"><i class="fa fa-circle-o"></i> Donors List</a></li> 
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-flask"></i> <span>General Health</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url(' /home ') }}"><i class="fa fa-circle-o"></i> Make Apointment</a></li>
				<!-- <li><a href="{{ url('/view-all-stock') }}"><i class="fa fa-circle-o"></i> View All Stock</a></li> -->
				<li><a href="{{ url('/user-review') }}"><i class="fa fa-circle-o"></i> User Review</a></li> 
			</ul>
		</li>
		
		<li class="treeview">
			<a href="#">
				<i class="fa fa-book"></i> <span>Adonis (Fitness)</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/bmi') }}"><i class="fa fa-circle-o"></i> BMI Calculator</a></li>
				<!--<li><a href="{{ url('/add-accounts') }}"><i class="fa fa-circle-o"></i> Add Accounts</a></li> -->
			</ul>
		</li>
		
		<li>
			<a href="{{ url('/view-users') }}">
				<i class="fa fa-users"></i>
				<span>Users</span>
			</a>
        </li>
	</ul>
</section>