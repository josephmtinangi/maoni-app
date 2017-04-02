@extends('layouts.admin')


@section('content')

    <div class="title is-2">Edit {{ $feedbackType->name }}</div>

    <div class="columns">
        <div class="column is-6">
            <form method="POST" action="/admin/feedback-types/{{ $feedbackType->id }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                @include('admin.feedback-types._form', ['btn_text' => 'Update'])

            </form>
        </div>
    </div>

@endsection