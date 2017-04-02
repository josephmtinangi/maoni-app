@extends('layouts.admin')


@section('content')

    <div class="title is-2">Feedback Types</div>

    <div class="nav menu">
        <div class="container">
            <div class="nav-left">
                <a href="/admin/feedback-types/create" class="nav-item is-tab is-active"><span class="icon-btn"><i
                                class="fa fa-plus"></i></span></a>
            </div>

        </div>
    </div>

    @if($feedback_types->count()>0)

        <table class="table">
            <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </tfoot>
            <tbody>
            <?php $i = 1; ?>
            @foreach($feedback_types as $feedback_type)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $feedback_type->name }}</td>
                    <td>{{ $feedback_type->created_at }}</td>
                    <td>{{ $feedback_type->updated_at }}</td>
                    <td>
                        <a href="/admin/feedback-types/{{ $feedback_type->id }}/edit"><i class="fa fa-edit"></i></a>
                    </td>
                    <td>
                        <a href="/admin/feedback-types/{{ $feedback_type->id }}/delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @else

        No Feedback Type

    @endif

@endsection