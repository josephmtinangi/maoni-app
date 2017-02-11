@extends('layouts.app')

@section('header')

    <section class="hero is-light is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    Submit
                </h1>
                <h2 class="subtitle">
                    Your suggestion
                </h2>
            </div>
        </div>
    </section>

@endsection

@section('content')

    <div class="feedback-form container">

        @include('errors.list')

        <form action="{{ url('feedback') }}" method="POST">
            {{ csrf_field() }}
            @include('feedback._form')
        </form>
    </div>

@endsection