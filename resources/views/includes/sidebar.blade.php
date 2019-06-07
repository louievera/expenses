<div id="sidebar-container">
	<div class='sidebar-user-info'>
		<img src = "{{url('storage/img/picture.png')}}" id="sidebar-profile-pic" width="80">
		<p>
			{{Auth::user()->name}}
			({{Auth::user()->role_id}})
		</p>
	</div>

	<div>
		<ul class="sidebar-menu">
			@if(Auth::user()->role_id == 1)
			<li><b>User Management</b></li>
			<ul class="sidebar-menu">
				<li><a href="{{url('/roles')}}">Roles</a></li>
				<li><a href="{{url('/users')}}">Users</a></li>
			</ul>
			@endif
			<li><b>Expense Management</b></li>
			<ul class="sidebar-menu">
				<li><a href="{{url('expensesCategory')}}">Expenses Categories</a></li>
				<li><a href="{{url('/expenses')}}">Expenses</a></li>

			</ul>
		</ul>
	</div>
</div>