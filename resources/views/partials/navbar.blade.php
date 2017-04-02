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
        <a href="/about" class="nav-item is-tab is-hidden-mobile">About</a>
        <a href="/contact" class="nav-item is-tab is-hidden-mobile">Contact</a>

        @if( ! Auth::guest())

            <span class="nav-item">
                <form action="{{ url('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="button">Sign Out</button>
                </form>
            </span>

        @else
            <a href="{{ url('login') }}" class="nav-item is-tab">Sign In</a>
            <a href="{{ url('register') }}" class="nav-item is-tab">Sign Up</a>
        @endif

    </div>
</nav>