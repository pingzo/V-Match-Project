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
                             
            <dl>
                                   @if(Auth::check())
                                    You are logged in! <br/>
                           <hr>    
                                    <dt>ชื่อ-นามสกุล:</dt>
                                            <dd>{{Auth::user()->firstname}} {{Auth::user()->lastname}} </dd>
                                    <dt>เบอร์โทรศัพท์:</dt>
                                            <dd>{{Auth::user()->phone}}</dd>
                                   <dt>e-mail:</dt>
                                            <dd>{{Auth::user()->email}}</dd>
                                   <dt>สถานะ:</dt>
                                            <dd>{{Auth::user()->role}}</dd>  
                                   @else
                                            <?= 'not have user login'; ?>
                                   @endif
                          </dl>                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
