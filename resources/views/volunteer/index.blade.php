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
                                   <div class="ccol-lg-12 centered">
                                            <!-- Tab panes -->
                                              <div class="tab-content">
                                                  
                                                <div role="tabpanel" class="tab-pane active" id="money">เงิน...
                                                    @if(isset($schools))
                                                        <table class="table table-bordered">
                                                            <thead>
                                                            <tr class="success">
                                                                <th>ชื่อโรงเรียน</th>
                                                                <th>จังหวัด</th>
                                                                <th>ประเภทความต้องการ</th>
                                                                <th>ความต้องการ</th>
                                                                <th>เบอร์โทร</th>
                                                                <th>E-mail</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($schools as $school)
                                                                <tr>
                                                                    <td>{{$school->name}}</td>
                                                                    <td>{{$school->city->city}}</td>
                                                                    <td>{{$school->requirement->Req}}</td>
                                                                    <td>{{$school->requirement->Sub_req}}</td>
                                                                    <td>{{$school->tel}}</td>
                                                                    <td>{{$school->sch_email}}</td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    @endif
                                                </div>
                                                  
                                                <div role="tabpanel" class="tab-pane" id="things">สิ่งของ...
                                                @if(isset($schools))
                                                        <table class="table table-bordered">
                                                            <thead>
                                                            <tr class="success">
                                                                <th>ชื่อโรงเรียน</th>
                                                                <th>จังหวัด</th>
                                                                <th>ประเภทความต้องการ</th>
                                                                <th>ความต้องการ</th>
                                                                <th>เบอร์โทร</th>
                                                                <th>E-mail</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($schools as $school)
                                                                <tr>
                                                                    <td>{{$school->name}}</td>
                                                                    <td>{{$school->city->city}}</td>
                                                                    <td>{{$school->requirement->Req}}</td>
                                                                    <td>{{$school->requirement->Sub_req}}</td>
                                                                    <td>{{$school->tel}}</td>
                                                                    <td>{{$school->sch_email}}</td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    @endif
                                                </div>
                                                  
                                                <div role="tabpanel" class="tab-pane" id="effort">แรงงาน...
                                                @if(isset($schools))
                                                        <table class="table table-bordered">
                                                            <thead>
                                                            <tr class="success">
                                                                <th>ชื่อโรงเรียน</th>
                                                                <th>จังหวัด</th>
                                                                <th>ประเภทความต้องการ</th>
                                                                <th>ความต้องการ</th>
                                                                <th>เบอร์โทร</th>
                                                                <th>E-mail</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($schools as $school)
                                                                <tr>
                                                                    <td>{{$school->name}}</td>
                                                                    <td>{{$school->city->city}}</td>
                                                                    <td>{{$school->requirement->Req}}</td>
                                                                    <td>{{$school->requirement->Sub_req}}</td>
                                                                    <td>{{$school->tel}}</td>
                                                                    <td>{{$school->sch_email}}</td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    @endif
                                                </div>
                                                  
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
