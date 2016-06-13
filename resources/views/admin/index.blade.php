@extends('stanley.index')

@section('content')
<div class="container pt">
<div class="row mt">
<div class="col-md-10 col-md-offset-1">
         <ol class="breadcrumb">
                  <li><a href="{{ url('/home') }}">หน้าหลัก</a></li>
                  <li class="active">จัดการสมาชิก</li>
         </ol>
         <div class="panel panel-default">
                  <div class="panel-heading">จัดการสมาชิก</div>
                           <div class="panel-body">
                                   <div> <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                      <li role="presentation" class="active">
                                                        <a href="#volunteers" aria-controls="volunteers" role="tab" data-toggle="tab">
                                                            อาสาสมัครทั้งหมด
                                                        </a>
                                                     </li>
                                                     <li role="presentation">
                                                        <a href="#schools" aria-controls="schools" role="tab" data-toggle="tab">
                                                            โรงเรียนทั้งหมด
                                                        </a>
                                                     </li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                     <div role="tabpanel" class="tab-pane active" id="volunteers">
                                                     <h3>จัดการอาสาสมัคร</h3>
                                                              @if(isset($volunteers))
                                                              <table class="table table-bordered">
                                                                       <thead>
                                                                               <tr class="success" >
                                                                                    <th>USER_ID</th>
                                                                                    <th>VOL_ID</th>
                                                                                    <th>ชื่ออาสาสมัคร</th>
                                                                                    <th>จัดการ</th>
                                                                                    <th>Mark Star</th>
                                                                               </tr>
                                                                       </thead>
                                                                       <tbody>
                                                                       @foreach($volunteers as $volunteer)
                                                                               <tr>
                                                                                   <td>{{$volunteer->user_id}}</td>
                                                                                    <td>{{$volunteer->id}}</td>
                                                                                    <td>{{$volunteer->group_name}}</td>                                                                               
                                                                                    <td>
                                                                                        <a href="{{url('/volunteer/'.$volunteer->user_id.'/index')}}"
                                                                                           type="button" class="btn btn-info btn-xs" aria-label="Left Align">
                                                                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                                                        ดูข้อมูล
                                                                                        </a>
                                                                                        <a href="{{url('/volunteer/'.$volunteer->id.'/destroy/'.$admin_id)}}" 
                                                                                           type="button" class="btn btn-danger btn-xs" aria-label="Left Align">
                                                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                                                        ลบข้อมูล
                                                                                        </a>                                                    
                                                                                    </td>
                                                                                    <td>
                                                                                        @if($volunteer->star_mark == 1)
                                                                                                 <a href="{{url('/volunteer/'.$volunteer->id.'/mark/'.$admin_id)}}" 
                                                                                                   type="button" class="btn btn-defalt btn-xs" aria-label="Left Align">
                                                                                                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                                                 ยังไม่ได้ตรวจสอบ
                                                                                                 </a>
                                                                                        @else
                                                                                                 <a href="{{url('/volunteer/'.$volunteer->id.'/mark/'.$admin_id)}}" 
                                                                                                   type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                                                                                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                                                 ตรวจสอบแล้ว
                                                                                                 </a>
                                                                                        @endif
                                                                                        </td>
                                                                                </tr>
                                                                       @endforeach   
                                                                       </tbody>
                                                              </table>
                                                              <br>
                                                              <!--Pagination-->
                                                              <div class="centered">{!!  $volunteers->render()   !!}</div>
                                                              @endif
                                                     </div>
                                                     <div role="tabpanel" class="tab-pane" id="schools">
                                                     <h3>จัดการโรงเรียน</h3>
                                                              @if(isset($schools))
                                                              <table class="table table-bordered">
                                                                      <thead>
                                                                               <tr class="success">
                                                                                    <th>USER_ID</th>
                                                                                    <th>SCH_ID</th>
                                                                                    <th>ชื่อโรงเรียน</th>
                                                                                    <th>จัดการ</th>
                                                                                    <th>Mark Star</th>
                                                                               </tr>
                                                                      </thead>
                                                                      <tbody>
                                                                       @foreach($schools as $school)
                                                                               <tr>
                                                                                        <td>{{$school->user_id}}</td>
                                                                                        <td>{{$school->id}}</td>
                                                                                        <td>{{$school->name}}</td>
                                                                                        <td>
                                                                                                 <a href="{{url('/schools/'.$school->user_id.'/index')}}" 
                                                                                                    type="button" class="btn btn-info btn-xs" aria-label="Left Align">
                                                                                                 <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                                                                 ดูข้อมูล
                                                                                                 </a>
                                                                                                 <a href="{{url('/schools/'.$school->id.'/destroy/'.$admin_id)}}" 
                                                                                                    type="button" class="btn btn-danger btn-xs" aria-label="Left Align">
                                                                                                 <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                                                                 ลบข้อมูล
                                                                                                 </a>
                                                                                        </td>
                                                                                        <td>
                                                                                        @if($school->star_mark == 1)
                                                                                                 <a href="{{url('/schools/'.$school->id.'/mark/'.$admin_id)}}" 
                                                                                                   type="button" class="btn btn-defalt btn-xs" aria-label="Left Align">
                                                                                                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                                                 ยังไม่ได้ตรวจสอบ
                                                                                                 </a>
                                                                                        @else
                                                                                                 <a href="{{url('/schools/'.$school->id.'/mark/'.$admin_id)}}" 
                                                                                                   type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                                                                                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                                                 ตรวจสอบแล้ว
                                                                                                 </a>
                                                                                        @endif
                                                                                        </td>
                                                                               </tr>
                                                                       @endforeach   
                                                                       </tbody>
                                                              </table>
                                                              <br>
                                                              <!--Pagination-->
                                                              <div class="centered">{!!  $schools->render()   !!}</div>
                                                              @endif
                                                     </div>
                                            </div>
                                   </div> <!-- End Nav tabs -->
                           </div>
                  </div>
       </div>
</div>
</div>
</div>
@endsection
