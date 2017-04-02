@extends('layouts.admin')


@section('content')

    <div class="title is-2">Add Category</div>

    <div class="columns">
        <div class="column is-6">
            <form method="POST" action="/admin/categories">
                {{ csrf_field() }}

                @include('admin.categories._form', ['btn_text' => 'Create'])

            </form>
        </div>
    </div>

@endsection