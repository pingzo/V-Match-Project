@extends('stanley.index')

@section('content')
<div class="container pt">
         <div class="row mt">
                  <div class="col-md-10 col-md-offset-1">
            
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">home</li>
            </ol>
            
            <div class="panel panel-default">

        

                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                   
                     @if(Auth::check())
                        {{Auth::user()->id}}
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
