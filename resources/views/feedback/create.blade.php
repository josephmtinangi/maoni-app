@extends('layouts.app')

@section('content')

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

<div class="feedback-form container">
  <form action="{{ url('feedback') }}" method="POST">
      {{ csrf_field() }}
      @include('feedback._form')
  </form>  
</div>

@endsection