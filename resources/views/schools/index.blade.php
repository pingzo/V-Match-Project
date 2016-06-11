@extends('stanley.index')

@section('content')

<div class="container pt">
    <div class="row mt">
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">School Profile</li>
            </ol>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="ww">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 ">   
                                
                                  <!--Admin Mark Star-->
                                  <div class="centered">          
                                    @if($schools->star_mark == 1)                                    
                                    <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align" disabled="disabled">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            Admin Unconfirmed
                                   </button>
                                    @else
                                   <button type="button" class="btn btn-success btn-xs" aria-label="Left Align" disabled="disabled">
                                           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            Admin Confirmed
                                   </button>
                                   @endif                                   
                                  </div> <br>
                                   
                                <div class="row">
                                         <div class="col-xs-4">
                                           <div class="thumbnail">
                                                  <img src="{{ url('assets/img/port05.jpg') }}" alt="..."> <hr>
                                                  <div class="centered">
                                                          <p>โรงเรียน: {{$schools->name}}</p>                                                                         
                                                  </div>
                                            </div>          
                                         </div>
                                   <div class="col-xs-8">
                                            <div class="panel panel-default">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3>ข้อมูลโรงเรียน</h3></div>
                                            <!-- List group -->
                                            <ul class="list-group">
                                              <li class="list-group-item">
                                                  <b>รหัสโรงเรียน 10 หลัก:</b> 
                                                  {{$schools->code}}<br></li>
                                              <li class="list-group-item">
                                                  <b>ชื่อโรงเรียน:</b> 
                                                  {{$schools->name}}</li>
                                              <li class="list-group-item">
                                                  <b>เบอร์โทรศัพท์:</b> 
                                                  {{$schools->tel}}</li>
                                              <li class="list-group-item">
                                                  <b>ที่อยู่:</b>  
                                                  {{$schools->address}}</li>
                                              <li class="list-group-item"><b>จังหวัด:</b> 
                                                  {{$schools->city->city}}</li>
                                              <li class="list-group-item">
                                                  <b>อีเมล:</b> 
                                                  {{$schools->sch_email}}</li>
                                              <li class="list-group-item">
                                                  <b>ความต้องการ:</b> 
                                                  {{$schools->requirement->Sub_req}}</li>
                                            </ul>
                                          </div>
                                             
                                               @if ( Auth::user()->role =='school')
                                               <hr>
                                               <p>
                                                    <a href="{{ url('/schools/'. Auth::user()->id.'/edit') }}" 
                                                        type="button" class="btn btn-primary btn-sm">แก้ไขข้อมูลโรงเรียน</a>
                                              </p>
                                            @endif
                                             
                                   </div>
                             </div>

                            </div> <!-- /col-lg-10 col-lg-offset-1 -->
                     </div><!-- /row -->
                    </div><!-- /ww -->
                </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
<!-- /End show Profile --> 
                 
         </div><!-- /col-md-10 col-md-offset-1 -->
    </div><!-- /row mt -->
</div><!-- /container pt -->
@endsection
