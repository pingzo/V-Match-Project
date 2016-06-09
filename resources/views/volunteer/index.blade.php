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
                                       <!-- <h2>ข้อมูลส่วนตัว</h2>
                                               ชื่อ-นามสกุล: {{$volunteers->user->firstname}} {{$volunteers->user->lastname}} <br>
                                               เบอร์โทรศัพท์: {{$volunteers->user->phone}} <br>
                                               อีเมล: {{$volunteers->user->email}} <br>
                                               สถานะ: {{$volunteers->user->role}} 
                                               <hr>-->
                                               <h2>ข้อมูลอาสาสมัคร</h2>  
                                               <ul class="list-group">
                                                   <li class="list-group-item"><b>ชื่ออาสาสมัคร:</b> {{$volunteers->group_name}}</li>
                                                <li class="list-group-item"><b>เบอร์โทรศัพท์:</b> {{$volunteers->group_phone}}</li>
                                                <li class="list-group-item"><b>ที่อยู่:</b> {{$volunteers->group_address}}</li>
                                                <li class="list-group-item"><b>อีเมล:</b> {{$volunteers->group_email}}</li>
                                                <li class="list-group-item"><b>ความต้องการ:</b> {{$volunteers->requirement->Sub_req}}</li>
                                              </ul>
   
                                               <hr>
                                               <p>
                                                    <a href="{{ url('/volunteer/'. Auth::user()->id.'/edit') }}" 
                                                        type="button" class="btn btn-primary btn-sm">แก้ไขข้อมูลอาสาสมัคร</a>
                                                    <a href="{{ url('/volunteer/'. Auth::user()->id.'/index') }}"
                                                        type="button" class="btn btn-primary btn-sm">ดูข้อมูลอาสาสมัคร</a>
                                               </p>

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
                           <div id="ww">
                           <div class="row">
                                   <div class="col-lg-10 col-lg-offset-1 ">
                                   <div class="row">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#matching" aria-controls="matching" role="tab" data-toggle="tab">จับคู่</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#history" aria-controls="history" role="tab" data-toggle="tab">ดูประวัติการจับคู่</a>
                                                </li>
                                            </ul>

                                   <div id="ww2">
                                   <div class="row">
                                   <div class="ccol-lg-12 centered">
                                            <!-- Tab panes -->
                                              <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="matching">จับคู่...</div>
                                                <div role="tabpanel" class="tab-pane" id="history">ดูประวัติการจับคู่...</div>
                                              </div>
                                   </div><!-- /col-lg-12 centered -->
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
