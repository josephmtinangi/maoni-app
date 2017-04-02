@extends('layouts.admin')


@section('content')

    <div class="title is-2">Edit {{ $category->name }}</div>

    <div class="columns">
        <div class="column is-6">
            <form method="POST" action="/admin/categories/{{ $category->id }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                @include('admin.categories._form', ['btn_text' => 'Update'])

            </form>
        </div>
    </div>

@endsection