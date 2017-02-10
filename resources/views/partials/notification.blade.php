@if(session()->has('status'))
<div class="notification is-success has-text-centered">
  <button class="delete"></button>
  {{ session('status') }}
</div>
@endif