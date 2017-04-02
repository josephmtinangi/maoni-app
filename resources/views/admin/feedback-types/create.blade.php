@extends('layouts.admin')


@section('content')

    <div class="title is-2">Add Feedback Type</div>

    <div class="columns">
        <div class="column is-6">
            <form method="POST" action="/admin/feedback-types">
                {{ csrf_field() }}

                @include('admin.feedback-types._form', ['btn_text' => 'Create'])

            </form>
        </div>
    </div>

@endsection