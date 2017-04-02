@extends('layouts.admin')


@section('content')

    <div class="title is-2">Users</div>

    <div class="nav menu">
        <div class="container">
            <div class="nav-left">
                <a href="/admin/users/create" class="nav-item is-tab is-active"><span class="icon-btn"><i
                                class="fa fa-plus"></i></span></a>
            </div>

        </div>
    </div>

    @if($users->count()>0)

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
            @foreach($users as $user)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <a href="/admin/users/{{ $user->id }}/edit"><i class="fa fa-edit"></i></a>
                    </td>
                    <td>
                        <a href="/admin/users/{{ $user->id }}/delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @else

        No Category

    @endif

@endsection