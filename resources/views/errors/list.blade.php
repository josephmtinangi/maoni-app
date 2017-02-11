@if(count($errors) > 0)

    <div class="notification is-danger">
        <button class="delete"></button>
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>

@endif