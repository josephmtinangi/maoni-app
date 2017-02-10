@extends('layouts.app')

@section('content')
<section class="hero is-dark is-medium">
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

<div class="app container">
    <div class="columns">
        <div class="column is-three-quarters is-mobile">
            1
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