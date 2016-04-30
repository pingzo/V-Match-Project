@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>แสดงข้อมูลลูกค้า</h3> 
                    <h5>[ ทั้งหมด : {{ $count }} คน ] </h5>
                </div>

                <div class="panel-body">
                   
                           @foreach ($customers as $customer)
                                                                                               
                           <a href="{{ url('delete/'.$customer->id) }} ">ลบ</a> <b>รหัส:</b> {{ $customer->id }} <b>ชื่อ-สกุล:</b> {{ $customer->fullname }} 
                                  
                                    <br>
                                                                                               
                           @endforeach
                           
                           <br>
                           <!--pagination-->
                           {!! $customers->render()  !!}
                           
                           <hr>
                           ลูกค้าทั้งหมด {{ $customers->total() }} คน
                      
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
