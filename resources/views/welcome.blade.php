@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Test</div>
                    @if(Auth::check())
                    <p>You are logged in</p>
                    @endif
                  </div>
            @if(Auth::guest())
              <p> You're not logged in</p>
            @endif
        </div>
    </div>
</div>
@endsection