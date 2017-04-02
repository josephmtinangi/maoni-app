@extends('layouts.app')

@section('header')

    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    Maoni yako
                </h1>
                <h2 class="subtitle">
                    Tujenge Taifa Pamoja
                </h2>
            </div>
        </div>
    </section>

@endsection

@section('content')

    <div class="app container">
        <div class="columns">
            <div class="column is-three-quarters is-mobile">

                <div class="tile is-ancestor">
                    <div class="tile is-parent">
                        <div class="tile is-child box">
                            <p class="title">What is this?</p>
                            <p>
                                Vehicle convenience store boat into cyber-camera shrine grenade ablative. Media nodal
                                point faded 8-bit uplink convenience store long-chain hydrocarbons lights denim assault
                                fluidity fetishism cartel bridge corrupted euro-pop. Network woman-ware urban long-chain
                                hydrocarbons neon marketing. Kowloon courier j-pop media marketing apophenia meta-rain
                                industrial grade neural numinous tattoo RAF drugs.
                            </p>
                        </div>
                    </div>
                    <div class="tile is-4 is-vertical is-parent">
                        <div class="tile is-child box">
                            <p class="title">Features</p>
                            <ul>
                                <li>Submit your suggestions</li>
                                <li>Track the suggestions</li>
                            </ul>
                        </div>
                        <div class="tile is-child box">
                            <p class="title">Pricing</p>
                            <p>FREE</p>
                        </div>
                    </div>
                </div>

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