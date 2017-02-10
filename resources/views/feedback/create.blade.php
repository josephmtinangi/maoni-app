@extends('layouts.app')

@section('content')

<section class="hero is-dark is-bold">
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
    <form action="{{ url('feedbacks') }}" method="POST">

        @include('feedback._form')

        <div class="control is-horizontal">
            <div class="control-label">
                <label class="label"></label>
            </div>
            <div class="control">
                <button type="submit" class="button is-info">Submit</button>
            </div>
        </div>
    </form>    
</div>

@endsection