@extends('stanley.index')

@section('content')
        <div class="container pt">
	<div class="row mt">
                        <div class="col-md-10 col-md-offset-1">
                                        <ol class="breadcrumb">
                                            <li><a href="#">Home</a></li>
                                            <li class="active">Manage Members</li>
                                        </ol>
                                <div class="panel panel-default">
                                   <div class="panel-heading">จัดการสมาชิก</div>

                                   <div class="panel-body">
                                         <p>
                                             <a class="btn btn-primary btn-lg" role="button" data-toggle="collapse" 
                                                href="#manage-vol" aria-expanded="false" aria-controls="manage-vol">
                                                 จัดการอาสาสมัคร</a>
                                             <a class="btn btn-primary btn-lg" role="button" data-toggle="collapse" 
                                                href="#manage-sch" aria-expanded="false" aria-controls="manage-sch">
                                                  จัดการโรงเรียน</a>
                                        </p>       
                                        
                                        <div class="collapse" id="manage-vol">
                                            <div class="well">
                                             <h3>จัดการอาสาสมัคร</h3>
                                        @if(isset($volunteers))
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="success" >
                                                        <th>VOL_ID</th>
                                                        <th>ชื่ออาสาสมัคร</th>
                                                        <th>USER_ID</th>
                                                        <th>ชื่อผู้ใช้งาน</th>
                                                        <th>จัดการผู้ใช้งาน</th>
                                                        <th>Mark Star</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     @foreach($volunteers as $volunteer)
                                                        <tr>
                                                            <td>{{$volunteer->id}}</td>
                                                            <td>{{$volunteer->group_name}}</td>
                                                            <td>{{$volunteer->user_id}}</td>
                                                            <td>{{$volunteer->user->name}}</td>
                                                            <td>
                                                                <a href="{{url('/volunteer/'.$volunteer->id.'/index/')}}" type="button" class="btn btn-info btn-xs" aria-label="Left Align">
                                                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                                    Read
                                                                </a>
                                                                <a href="{{url('/volunteer/'.$volunteer->id.'/destroy/'.$admin_id)}}" type="button" class="btn btn-danger btn-xs" aria-label="Left Align">
                                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                                    Delete
                                                                </a>                                                    
                                                            </td>
                                                        </tr>
                                                     @endforeach   
                                                </tbody>
                                            </table>
                                         @endif
                                            </div>
                                        </div>
                                        
                                        <div class="collapse" id="manage-sch">
                                            <div class="well">
                                                <h3>จัดการโรงเรียน</h3>
                                              @if(isset($schools))
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="success">
                                                        <th>SCH_ID</th>
                                                        <th>ชื่อโรงเรียน</th>
                                                        <th>USER_ID</th>
                                                        <th>ชื่อผู้ใช้งาน</th>
                                                        <th>จัดการผู้ใช้งาน</th>
                                                        <th>Mark Star</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     @foreach($schools as $school)
                                                        <tr>
                                                            <td>{{$school->id}}</td>
                                                            <td>{{$school->name}}</td>
                                                            <td>{{$school->user_id}}</td>
                                                            <td>{{$school->user->name}}</td>
                                                            <td>
                                                                <a href="{{url('/schools/'.$school->id.'/index')}}" type="button" class="btn btn-info btn-xs" aria-label="Left Align">
                                                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                                    Read
                                                                </a>
                                                                <a href="{{url('/schools/'.$school->id.'/destroy/'.$admin_id)}}" type="button" class="btn btn-danger btn-xs" aria-label="Left Align">
                                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                                    Delete
                                                                </a>
                                                            </td>
                                                            <td>
                                                                @if($school->star_mark == 1)
                                                                    <a href="{{url('/schools/'.$school->id.'/mark/'.$admin_id)}}" type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                        Unmark
                                                                    </a>
                                                                @else
                                                                    <a href="{{url('/schools/'.$school->id.'/mark/'.$admin_id)}}" type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                                        Mark
                                                                    </a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                     @endforeach   
                                                </tbody>
                                            </table>
                                         @endif
                                            </div>
                                        </div>
                                   </div>
                                   
                                   
                                </div>
                        </div>
                 </div>
        </div>
@endsection
