@extends('layouts.app')

@section('content')
    <section class="hero is-info">
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title">
            Sign In
          </h1>
        </div>
      </div>
    </section>
    <div class="columns is-mobile auth">
        <div class="column is-4 is-offset-4">

            @include('errors.list')

            <form action="{{ url('login') }}" method="POST">

                {{ csrf_field() }}

                <p class="control has-icon">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                           class="input is-large">
                    <span class="icon is-small">
                        <i class="fa fa-envelope"></i>
                    </span>
                </p>

                <p class="control has-icon">
                    <input type="password" name="password" placeholder="Password" class="input is-large">
                    <span class="icon is-small">
                        <i class="fa fa-lock"></i>
                    </span>
                </p>

                <p class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="remember_me">
                        Remember me
                    </label>
                </p>

                <p class="control">
                    <button type="submit" class="button is-success">Sign In</button>
                </p>

            </form>
        </div>
    </div>
@endsection