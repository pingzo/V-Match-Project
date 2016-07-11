@extends('stanley.index')

@section('content')

<div class="container pt"> 
    <div class="row mt">
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><a href="{{ url('/home') }}">หน้าหลัก</a></li>
                <li class="active">ข้อมูลอาสาสมัคร</li>
            </ol>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="ww">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 ">   
                                
                                <!--Admin Mark Star-->
                                  <div class="left" style="text-align: left;">
                                    @if($volunteers->star_mark == 0)
                                    <button type="button" class="btn btn-defalt btn-xs" aria-label="Left Align" disabled="disabled">
                                            <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                                            ยังไม่ได้รับการยืนยันจาก v-match
                                   </button>
                                    @else
                                   <button type="button" class="btn btn-success btn-xs" aria-label="Left Align" disabled="disabled">
                                           <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                                            ได้รับการยืนยันจาก v-match
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
                                        @elseif(Auth::user()->role !='volunteer')
                                    <hr>
                                        <div class="panel panel-default">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3>ข้อมูลติดต่อตัวแทนอาสาสมัคร</h3></div>
                                            <!-- List group -->
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>ชื่อตัวแทน:</b> {{$volunteers->user->firstname}}
                                                    {{$volunteers->user->lastname}}</li>
                                                <li class="list-group-item"><b>เบอร์โทรศัพท์:</b> {{$volunteers->user->phone}}</li>
                                                <li class="list-group-item"><b>อีเมล:</b> {{$volunteers->user->email}}</li>
                                            </ul>
                                        </div>
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
                           {{--<h2>ข้อมูลจับคู่ความต้องการ</h2>
                           <hr>--}}
                           <div id="ww">
                           <div class="row">
                               <div class="col-lg-10 col-lg-offset-1 ">
                                   <div class="row">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#match" aria-controls="match" role="tab" data-toggle="tab">โรงเรียนที่ v-match แนะนำ</a>
                                                </li>
                                                <li role="presentation" >
                                                    <a href="#favorit" aria-controls="favorit" role="tab" data-toggle="tab">โรงเรียนที่อาสาสมัครสนใจ</a>
                                                </li>
                                            </ul>

                                        <!-- Tab panes -->
                                              <div class="tab-content">

                                                    <div role="tabpanel" class="tab-pane active" id="match"> <br>
                                                        @if(isset($schools))
                                                            @foreach($schools as $school)
                                                                <div class="col-xs-4">
                                                                    <div class="thumbnail">
                                                                        <style>
                                                                            .image2{
                                                                                max-width: 100px;
                                                                            }
                                                                        </style>
                                                                        <div class="centered">
                                                                            <p> <img class="image2" src="/images/{{$school->image_name}}" /></p>
                                                                        </div> <hr>
                                                                        <div class="centered">
                                                                            <h4>โรงเรียน: {{$school->name}}</h4>
                                                                            <h5>จังหวัด: {{$school->city->city}}</h5>
                                                                            <h5>ความต้องการ: {{$school->requirement->Sub_req}}</h5>
                                                                            <h6><a href="{{url('/schools/'.$school->user_id.'/index')}}" class="left" role="button">
                                                                                    ข้อมูลเพิ่มเติม</a></h6>
                                                                                <!--Vol Fav-->
                                                                            @if( Auth::user()->role =='volunteer')
                                                                                <div class="center" style="text-align: center;">
                                                                                    @if($school->vol_fav == 0)
                                                                                        <a href="{{url('/schools/'.$school->user_id.'/volFav/'.$vol_id)}}"
                                                                                           type="button" class="btn btn-defalt btn-xs" aria-label="Left Align">
                                                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                                            สนใจ
                                                                                        </a>
                                                                                    @else
                                                                                        <a href="{{url('/schools/'.$school->user_id.'/volFav/'.$vol_id)}}"
                                                                                           type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                                            สนใจ
                                                                                        </a>
                                                                                    @endif
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>

                                                <div role="tabpanel" class="tab-pane" id="favorit"><br>
                                                    @if(isset($schools))
                                                        @foreach($schools as $school)
                                                            @if($school->vol_fav=='1')
                                                                <div class="col-xs-4">
                                                                    <div class="thumbnail">
                                                                        <style>
                                                                            .image2{
                                                                                max-width: 100px;
                                                                            }
                                                                        </style>
                                                                        <div class="centered">
                                                                            <p> <img class="image2" src="/images/{{$school->image_name}}" /></p>
                                                                        </div> <hr>
                                                                        <div class="centered">
                                                                            <h4>โรงเรียน: {{$school->name}}</h4>
                                                                            <h5>จังหวัด: {{$school->city->city}}</h5>
                                                                            <h5>ความต้องการ: {{$school->requirement->Sub_req}}</h5>
                                                                            <h6><a href="{{url('/schools/'.$school->user_id.'/index')}}" class="left" role="button">
                                                                                    ข้อมูลเพิ่มเติม</a></h6>
                                                                            <!--Vol Fav-->
                                                                            @if( Auth::user()->role =='volunteer')
                                                                                <div class="center" style="text-align: center;">
                                                                                    @if($school->vol_fav == 0)
                                                                                        <a href="{{url('/schools/'.$school->user_id.'/volFav/'.$vol_id)}}"
                                                                                           type="button" class="btn btn-defalt btn-xs" aria-label="Left Align">
                                                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                                            สนใจ
                                                                                        </a>
                                                                                    @else
                                                                                        <a href="{{url('/schools/'.$school->user_id.'/volFav/'.$vol_id)}}"
                                                                                           type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                                            สนใจ
                                                                                        </a>
                                                                                    @endif
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div> <!-- / tab-content -->

                                       {{--<center>  {{ $schools->render() }} </center>--}}
                                   
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
