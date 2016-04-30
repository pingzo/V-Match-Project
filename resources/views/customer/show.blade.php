@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>แสดงข้อมูลลูกค้า {{ $customers->id }}</h3>
                </div>

                <div class="panel-body">                                            
                                                                                               
                                    <b>รหัส:</b> {{ $customers->id }} <br>
                                    <b>ชื่อ-สกุล:</b> {{ $customers->firstname }} {{ $customers->lastname}}
                              
                                    <br>                                                                                                                 
                      
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
