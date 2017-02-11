@extends('layouts.app')

@section('content')
    <div class="columns is-mobile">
        <div class="column is-half is-offset-one-quarter">

            @include('errors.list')

            <form action="{{ url('register') }}" method="POST">

                {{ csrf_field() }}

                <p class="control has-icon">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Name"
                           class="input is-large">
                    <span class="icon is-small">
                        <i class="fa fa-user"></i>
                    </span>
                </p>

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

                <p class="control has-icon">
                    <input type="password" name="password_confirmation" placeholder="Password Confirmation" class="input is-large">
                    <span class="icon is-small">
                        <i class="fa fa-lock"></i>
                    </span>
                </p>

                <p class="control">
                    <button type="submit" class="button is-success">Register</button>
                </p>

            </form>
        </div>
    </div>
@endsection