@extends('stanley.index')

@section('content')

<div class="container pt"> 
    <div class="row mt">
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><a href="{{ url('/home') }}">Home</a></li>
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
                                    <button type="button" class="btn btn-defalt btn-xs" aria-label="Left Align" disabled="disabled">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            ยังไม่ได้รับการยืนยันจากผู้ดูแลระบบ
                                   </button>
                                    @else
                                   <button type="button" class="btn btn-success btn-xs" aria-label="Left Align" disabled="disabled">
                                           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            ได้รับการยืนยันจากผู้ดูแลระบบ
                                   </button>
                                   @endif                                   
                                  </div> <br>
                                
                                <div class="row">
                                         <div class="col-xs-4">
                                           <div class="thumbnail">
                                               <style>
                                                   .image{
                                                       max-width: 200px;
                                                   }
                                               </style>
                                               <div class="centered">
                                                   <p> <img class="image" src="/images/{{$volunteers->image_name}}" /></p>
                                               </div> <hr>
                                                  <div class="centered">
                                                          <p> {{$volunteers->group_name}}</p>                                                                   
                                                  </div>
                                            </div>          
                                         </div>

                                    <div class="col-xs-8">
                                        <div class="panel panel-default">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3>ข้อมูลอาสาสมัคร</h3></div>
                                            <!-- List group -->
                                               <ul class="list-group">
                                                   <li class="list-group-item"><b>ชื่ออาสาสมัคร:</b> {{$volunteers->group_name}}</li>
                                                <li class="list-group-item"><b>เบอร์โทรศัพท์:</b> {{$volunteers->group_phone}}</li>
                                                <li class="list-group-item"><b>ที่อยู่:</b> {{$volunteers->group_address}}</li>
                                                <li class="list-group-item"><b>อีเมล:</b> {{$volunteers->group_email}}</li>
                                                <li class="list-group-item"><b>ความต้องการ:</b> {{$volunteers->requirement->Sub_req}}</li>
                                              </ul>
                                        </div>

                                            @if ( Auth::user()->role =='volunteer')
                                               <hr>
                                               <p>
                                                    <a href="{{ url('/volunteer/'. Auth::user()->id.'/edit') }}" 
                                                        type="button" class="btn btn-primary btn-sm">
                                                        <span class="glyphicon glyphicon-edit"></span> แก้ไขข้อมูลอาสาสมัคร</a>
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
                                                    <a href="#match" aria-controls="match" role="tab" data-toggle="tab">โรงเรียนที่จับคู่</a>
                                                </li>
                                                <li role="presentation" >
                                                    <a href="#money" aria-controls="money" role="tab" data-toggle="tab">เงิน</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#things" aria-controls="things" role="tab" data-toggle="tab">สิ่งของ</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#effort" aria-controls="effort" role="tab" data-toggle="tab">แรงงาน</a>
                                                </li>
                                            </ul>

                                        <!-- Tab panes -->
                                              <div class="tab-content">

                                                    <div role="tabpanel" class="tab-pane active" id="match"> <br>
                                                        @if(isset($schools))
                                                            @foreach($schools as $school)
                                                                <div class="row">
                                                                  <div class="col-sm-6 col-md-4">
                                                                    <div class="thumbnail">
                                                                      <div class="caption">
                                                                         <h4>โรงเรียน: {{$school->name}}</h4> 
                                                                         <h5>จังหวัด: {{$school->city->city}}</h5>
                                                                         <h5>ความต้องการ: {{$school->requirement->Sub_req}}</h5>
                                                                         <h6><a href="{{url('/schools/'.$school->user_id.'/index')}}" class="left" role="button">ข้อมูลเพิ่มเติม</a></h6>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                  
                                                    <div role="tabpanel" class="tab-pane active" id="money">เงิน<br>
                                                        @if(isset($schools))
                                                            @foreach($schools as $school)
                                                            @if($school->requirement->Req=='เงิน')
                                                                <div class="row">
                                                                  <div class="col-sm-6 col-md-4">
                                                                    <div class="thumbnail">
                                                                      <div class="caption">
                                                                         <h4>โรงเรียน: {{$school->name}}</h4> 
                                                                         <h5>จังหวัด: {{$school->city->city}}</h5>
                                                                         <h5>ความต้องการ: {{$school->requirement->Sub_req}}</h5>
                                                                         <h6><a href="{{url('/schools/'.$school->user_id.'/index')}}" class="left" role="button">ข้อมูลเพิ่มเติม</a></h6>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            @endif
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                  
                                                <div role="tabpanel" class="tab-pane" id="things">สิ่งของ<br>
                                                @if(isset($schools))
                                                            @foreach($schools as $school)
                                                            @if($school->requirement->Req=='สิ่งของ')
                                                                <div class="row">
                                                                  <div class="col-sm-6 col-md-4">
                                                                    <div class="thumbnail">
                                                                      <div class="caption">
                                                                         <h4>โรงเรียน: {{$school->name}}</h4> 
                                                                         <h5>จังหวัด: {{$school->city->city}}</h5>
                                                                         <h5>ความต้องการ: {{$school->requirement->Sub_req}}</h5>
                                                                         <h6><a href="{{url('/schools/'.$school->user_id.'/index')}}" class="left" role="button">ข้อมูลเพิ่มเติม</a></h6>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            @endif
                                                            @endforeach
                                                    @endif
                                                </div>
                                                  
                                                <div role="tabpanel" class="tab-pane" id="effort">แรงงาน<br>
                                                @if(isset($schools))
                                                            @foreach($schools as $school)
                                                            @if($school->requirement->Req=='แรงงาน')
                                                                <div class="row">
                                                                  <div class="col-sm-6 col-md-4">
                                                                    <div class="thumbnail">
                                                                      <div class="caption">
                                                                         <h4>โรงเรียน: {{$school->name}}</h4> 
                                                                         <h5>จังหวัด: {{$school->city->city}}</h5>
                                                                         <h5>ความต้องการ: {{$school->requirement->Sub_req}}</h5>
                                                                         <h6><a href="{{url('/schools/'.$school->user_id.'/index')}}" class="left" role="button">ข้อมูลเพิ่มเติม</a></h6>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            @endif
                                                            @endforeach
                                                    @endif
                                                </div>
                                            </div> <!-- / tab-content -->
                                            

                                   
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
