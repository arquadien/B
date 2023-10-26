@if (session('status'))
    <div class="alert alert-success">
        {{-- <p> {{ session('success') }}</p> --}}
        <span>votre post est en attente de validation </span>
    </div>
@elseif (session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div
@endif
