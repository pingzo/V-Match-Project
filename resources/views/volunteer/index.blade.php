@extends('stanley.index')

@section('content')

<div class="container pt">
    <div class="row mt">
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Volunteer Profile</li>
            </ol>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="ww">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 ">   
                                
                                <!--Admin Mark Star-->
                                  <div class="centered">          
                                    @if($volunteers->star_mark == 1)                                    
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
                                                          <p> {{$volunteers->group_name}}</p>                                                                   
                                                  </div>
                                            </div>          
                                         </div>
                                   <div class="col-xs-6">
                                               <h2>ข้อมูลอาสาสมัคร</h2>  
                                               <ul class="list-group">
                                                   <li class="list-group-item"><b>ชื่ออาสาสมัคร:</b> {{$volunteers->group_name}}</li>
                                                <li class="list-group-item"><b>เบอร์โทรศัพท์:</b> {{$volunteers->group_phone}}</li>
                                                <li class="list-group-item"><b>ที่อยู่:</b> {{$volunteers->group_address}}</li>
                                                <li class="list-group-item"><b>อีเมล:</b> {{$volunteers->group_email}}</li>
                                                <li class="list-group-item"><b>ความต้องการ:</b> {{$volunteers->requirement->Sub_req}}</li>
                                              </ul>
                                            
                                            @if ( Auth::user()->role =='volunteer')
                                               <hr>
                                               <p>
                                                    <a href="{{ url('/volunteer/'. Auth::user()->id.'/edit') }}" 
                                                        type="button" class="btn btn-primary btn-sm">แก้ไขข้อมูลอาสาสมัคร</a>
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

                  <div class="panel panel-default">
                  <div class="panel-body">
                           <h2>ข้อมูลจับคู่ความต้องการ</h2>
                           <hr>
                           <div id="ww">
                           <div class="row">
                                   <div class="col-lg-10 col-lg-offset-1 ">
                                   <div class="row">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#money" aria-controls="money" role="tab" data-toggle="tab">เงิน</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#things" aria-controls="things" role="tab" data-toggle="tab">สิ่งของ</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#effort" aria-controls="effort" role="tab" data-toggle="tab">แรงงาน</a>
                                                </li>
                                            </ul>
                                   <div id="ww2">
                                   <div class="row">
                                        <!-- Tab panes -->
                                              <div class="tab-content">                                      
                                                <div role="tabpanel" class="tab-pane active" id="money">เงิน
                                                    @if(isset($schools))
                                                            @foreach($schools as $school)
                                                                <div class="row">
                                                                  <div class="col-sm-6 col-md-4">
                                                                    <div class="thumbnail">
                                                                      <div class="caption">
                                                                         <h4>โรงเรียน: {{$school->name}}</h4> 
                                                                         <h5>จังหวัด: {{$school->city->city}}</h5>
                                                                         <h5>ความต้องการ: {{$school->requirement->Sub_req}}</h5>
                                                                         <h6><a href="{{url('/schools/'.$school->id.'/index')}}" class="left" role="button">ข้อมูลเพิ่มเติม</a></h6> 
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            @endforeach
                                                    @endif
                                                </div>
                                                  
                                                <div role="tabpanel" class="tab-pane" id="things">สิ่งของ
                                                @if(isset($schools))
                                                            @foreach($schools as $school)
                                                                <div class="row">
                                                                  <div class="col-sm-6 col-md-4">
                                                                    <div class="thumbnail">
                                                                      <div class="caption">
                                                                         <h4>โรงเรียน: {{$school->name}}</h4> 
                                                                         <h5>จังหวัด: {{$school->city->city}}</h5>
                                                                         <h5>ความต้องการ: {{$school->requirement->Sub_req}}</h5>
                                                                         <h6><a href="{{url('/schools/'.$school->id.'/index')}}" class="left" role="button">ข้อมูลเพิ่มเติม</a></h6> 
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            @endforeach
                                                    @endif
                                                </div>
                                                  
                                                <div role="tabpanel" class="tab-pane" id="effort">แรงงาน
                                                @if(isset($schools))
                                                            @foreach($schools as $school)
                                                                <div class="row">
                                                                  <div class="col-sm-6 col-md-4">
                                                                    <div class="thumbnail">
                                                                      <div class="caption">
                                                                         <h4>โรงเรียน: {{$school->name}}</h4> 
                                                                         <h5>จังหวัด: {{$school->city->city}}</h5>
                                                                         <h5>ความต้องการ: {{$school->requirement->Sub_req}}</h5>
                                                                         <h6><a href="{{url('/schools/'.$school->id.'/index')}}" class="left" role="button">ข้อมูลเพิ่มเติม</a></h6> 
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            @endforeach
                                                    @endif
                                                </div>
                                   </div><!-- /row -->
                                   </div><!-- /ww2 -->
                                   
                                   </div> <!-- /row -->
                                   </div> <!-- /col-lg-10 col-lg-offset-1 -->
                                   
                           </div><!-- /row -->
                          </div><!-- /ww -->
                  </div><!-- /panel-body -->
                  </div><!-- /panel panel-default -->
                 
         </div><!-- /col-md-10 col-md-offset-1 -->
    </div><!-- /row mt -->
</div><!-- /container pt -->
@endsection
