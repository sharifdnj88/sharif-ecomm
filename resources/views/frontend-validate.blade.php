@if( $errors -> any() )
<p class="alert alert-error alert-bg alert-block alert-inline show-code-action alert-title"><i class="w-icon-exclamation-triangle"></i> {{ $errors -> first() }}<button class="btn btn-link btn-close" aria-label="button">
    <i class="close-icon"></i>
</button></p>
@endif

@if( Session::has('success') )
<p class="alert alert-success">{{ Session::get('success') }}<button class="close" data-dismiss="alert">&times;</button></p>
@endif


@if( Session::has('warning') )
<p class="alert alert-warning">{{ Session::get('warning') }}<button class="close" data-dismiss="alert">&times;</button></p>
@endif


@if( Session::has('danger') )
<p class="alert alert-danger">{{ Session::get('danger') }}<button class="close" data-dismiss="alert">&times;</button></p>
@endif