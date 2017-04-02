@extends('layouts.app')

@section('header')

    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    About
                </h1>
            </div>
        </div>
    </section>

@endsection

@section('content')

    <div class="app container">
        <div class="columns">
            <div class="column is-three-quarters is-mobile">

                <h3 class="title is-3">
                    This app helps to collect and manage all the complaints in an organization.
                </h3>

            </div>
            <div class="column is-mobile">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Track your complaints
                        </p>
                    </header>
                    <div class="card-content">
                        <p class="control has-addons">
                            <input class="input" type="text" placeholder="Track ID">
                            <a class="button is-info">
                                Track
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection