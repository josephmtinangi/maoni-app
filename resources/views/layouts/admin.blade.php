<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/aside.css') }}">
</head>
<body>


<nav class="nav is-dark has-shadow" id="top">
    <div class="container">
        <div class="nav-left">
            <a class="nav-item" href="/admin">
                <i class="fa fa-bullhorn"></i>
            </a>
        </div>
      <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </span>
        <div class="nav-right nav-menu is-hidden-tablet">
            <a class="nav-item is-tab is-active">
                Dashboard
            </a>
            <a class="nav-item is-tab">
                Complaints
            </a>
            <a class="nav-item is-tab">
                Categories
            </a>
            <a class="nav-item is-tab">
                Users
            </a>
        </div>
    </div>
</nav>

<div class="columns">
    <aside class="column is-2 aside hero is-fullheight is-hidden-mobile">
        <div>
            <div class="uploader has-text-centered">
                <i class="fa fa-dashboard fa-5x"></i>
            </div>
            <div class="main">
                <div class="title">Main</div>
                <a href="/admin" class="item {{ Request::is('admin') ? 'active' : '' }}"><span class="icon"><i
                                class="fa fa-home"></i></span><span
                            class="name">Dashboard</span></a>
                <a href="/admin/feedback" class="item {{ Request::is('admin/feedback') ? 'active' : '' }}"><span class="icon"><i
                                class="fa fa-comment"></i></span><span class="name">Complaints</span></a>
                <a href="#" class="item {{ Request::is('admin/users') ? 'active' : '' }}"><span class="icon"><i
                                class="fa fa-users"></i></span><span
                            class="name">Users</span></a>
                <a href="/admin/categories" class="item {{ Request::is('admin/categories/*') ? 'active' : '' }}"><span
                            class="icon"><i class="fa fa-folder-o"></i></span><span
                            class="name">Categories</span></a>
                <a href="/admin/feedback-types"
                   class="item {{ Request::is('admin/feedback-types/*') ? 'active' : '' }}"><span
                            class="icon"><i class="fa fa-folder-o"></i></span><span
                            class="name">Types</span></a>
            </div>
        </div>
    </aside>
    <div class="content column is-10">

        @yield('content')

    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="has-text-centered">
            <p>
                <strong>Maoni App</strong> by <a href="https://about.me/josephmtinangi">Joseph Mtinangi</a>.
            </p>
            <p>
                <a class="icon" href="https://github.com/josephmtinangi/maoni-app">
                    <i class="fa fa-github"></i>
                </a>
            </p>
        </div>
    </div>
</footer>

<script src="{{ url('/js/app.js') }}"></script>
</body>
</html>