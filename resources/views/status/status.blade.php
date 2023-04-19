
@if(session()->get('success'))

<div id="alert" class="alert alert-success" role="alert">
     <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
    <div class="alert-text">{!! session()->get('success') !!}</div>
</div>

@endif

{{ session()->forget('success') }}

{{ session()->forget('error') }}

@if($errors->any())
<div id="alert" class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<script>
setTimeout(function() {
    $('#alert').fadeOut('fast');
}, 20000);

</script>