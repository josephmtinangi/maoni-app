<nav class="nav has-shadow">
    <div class="nav-left">
        <a href="{{ url('/') }}" class="nav-item">
            <span class="icon">
                <i class="fa fa-bullhorn"></i>
            </span>
        </a>
        <a href="/" class="nav-item is-tab is-hidden-mobile {{ Request::is('/') ? 'is-active' : '' }}">Home</a>
    </div>

    <div class="nav-center">
		<span class="nav-item">
			<a href="{{ url('feedback/create') }}" class="button">
				<span class="icon">
					<i class="fa fa-comment"></i>
				</span>
                <span>Tuma</span>
            </a>
		</span>
        <a href="/about" class="nav-item is-tab is-hidden-mobile {{ Request::is('about') ? 'is-active' : '' }}">About</a>
        <a href="/contact" class="nav-item is-tab is-hidden-mobile {{ Request::is('contact') ? 'is-active' : '' }}">Contact</a>

        @if( ! Auth::guest())

            <span class="nav-item">
                <form action="{{ url('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="button">Sign Out</button>
                </form>
            </span>

        @else
            <a href="{{ url('login') }}" class="nav-item is-tab {{ Request::is('login') ? 'is-active' : '' }}">Sign In</a>
            <a href="{{ url('register') }}" class="nav-item is-tab {{ Request::is('register') ? 'is-active' : '' }}">Sign Up</a>
        @endif

    </div>
</nav>