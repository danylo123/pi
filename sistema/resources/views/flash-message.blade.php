@if ($message = Session::get('success'))

<div class="alert alert-success alert-block">

    <button type="button" class="close" data-dismiss="alert">×</button>

    <strong>{{ $message }}</strong>

</div>

@endif



@if ($message = Session::get('error'))

<div class="alert alert-danger alert-block">

    <button type="button" class="close" data-dismiss="alert">×</button>

    <strong>{{ $message }}</strong>

</div>

@endif



@if ($message = Session::get('warning'))

<div class="alert alert-warning alert-block">

    <button type="button" class="close" data-dismiss="alert">×</button>

    <strong>{{ $message }}</strong>

</div>

@endif



@if ($message = Session::get('info'))

<div class="alert alert-info alert-block">

    <button type="button" class="close" data-dismiss="alert">×</button>

    <strong>{{ $message }}</strong>

</div>

@endif



@if ($errors->any())

<div class="alert alert-danger" id="alert">

    <button type="button" class="close" data-dismiss="alert">×</button>

    Por favor contate o administrador!

</div>

@endif

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 4000);    
</script>