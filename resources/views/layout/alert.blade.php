@if(Session::has('success'))
    <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
@endif

@foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">{{ $error }}</div>
@endforeach