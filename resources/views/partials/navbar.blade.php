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

        @if( ! Auth::guest())

            <span class="nav-item">
                <form action="{{ url('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="button">Logout</button>
                </form>
            </span>

        @else
            <a href="{{ url('login') }}" class="nav-item is-tab">Login</a>
            <a href="{{ url('register') }}" class="nav-item is-tab">Register</a>
        @endif

    </div>
</nav>