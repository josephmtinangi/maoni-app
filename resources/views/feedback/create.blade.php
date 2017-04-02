@extends('layouts.app')

@section('header')

    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title is-1">
                    Tuma maoni yako
                </h1>
            </div>
        </div>
    </section>

@endsection

@section('content')

    <div class="feedback-form container">

        @include('errors.list')

        <div class="columns is-mobile">
            <div class="column">
               <form action="{{ url('feedback') }}" method="POST">
                    {{ csrf_field() }}
                    @include('feedback._form')
                </form> 
            </div>
        </div>

    </div>

@endsection