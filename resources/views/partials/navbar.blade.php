<nav class="nav has-shadow">
	<div class="nav-left">
		<a href="{{ url('/') }}" class="nav-item">
			Maoni
		</a>
    <a class="nav-item is-tab is-hidden-mobile is-active">Home</a>
    <a class="nav-item is-tab is-hidden-mobile">Learn</a>
    <a class="nav-item is-tab is-hidden-mobile">Track</a>	
	</div>

	<div class="nav-center">
		<span class="nav-item">
			<a href="{{ url('feedback/create') }}" class="button">
				<span class="icon">
					<i class="fa fa-comment"></i>
				</span>
				<span>Submit</span>
			</a>
		</span>
    <a class="nav-item is-tab is-hidden-mobile">About</a>		
    <a class="nav-item is-tab is-hidden-mobile">Contact</a>			
	</div>
</nav>