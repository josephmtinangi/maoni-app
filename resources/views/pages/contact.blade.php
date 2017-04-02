@extends('layouts.app')

@section('header')

    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    Contact
                </h1>
            </div>
        </div>
    </section>

@endsection

@section('content')

    <div class="app container">
        <div class="columns">
            <div class="column is-three-quarters is-mobile">

                <div class="columns">
                    <div class="column is-6 is-offset-3">
                        <form action="">
                            <div class="field">
                              <label class="label">Name</label>
                              <p class="control">
                                <input class="input" type="text" name="name" placeholder="Your name">
                              </p>
                            </div>  
                            <div class="field">
                              <label class="label">Email</label>
                              <p class="control">
                                <input class="input" type="email" name="email" placeholder="Your email address">
                              </p>
                            </div>
                            <div class="field">
                              <label class="label">Message</label>
                              <p class="control">
                                <textarea class="textarea" name="message" placeholder="Your message"></textarea>
                              </p>
                            </div>  
                            <br>
                            <button type="submit" class="button is-primary">Send</button>
                        </form>                        
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