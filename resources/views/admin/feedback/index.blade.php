@extends('layouts.admin')


@section('content')

    <div class="title is-2">Feedbacks</div>

    <div class="nav menu">
        <div class="container">
            <div class="nav-left">
                <a href="/feedback/create" class="nav-item is-tab is-active"><span class="icon-btn"><i
                                class="fa fa-plus"></i></span></a>
            </div>

        </div>
    </div>

    @if($feedbacks->count()>0)

        <table class="table">
            <thead>
            <tr>
                <th>SN</th>
                <th>Subject</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>SN</th>
                <th>Subject</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </tfoot>
            <tbody>
            <?php $i = 1; ?>
            @foreach($feedbacks as $feedback)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $feedback->subject }}</td>
                    <td>{{ $feedback->created_at }}</td>
                    <td>{{ $feedback->updated_at }}</td>
                    <td>
                        <a href="/admin/feedback/{{ $feedback->id }}/edit"><i class="fa fa-edit"></i></a>
                    </td>
                    <td>
                        <a href="/admin/feedback/{{ $feedback->id }}/delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @else

        No Feedback

    @endif

@endsection