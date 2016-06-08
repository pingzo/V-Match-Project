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
                                                    <tr class="success">
                                                        <th>USER_ID</th>
                                                        <th>ชื่ออาสาสมัคร</th>
                                                        <th>ชื่อผู้ใช้งาน</th>
                                                        <th>จัดการผู้ใช้งาน</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     @foreach($volunteers as $volunteer)
                                                        <tr>
                                                            <td>{{$volunteer->user_id}}</td>
                                                            <td>{{$volunteer->group_name}}</td>
                                                            <td>{{$volunteer->role}}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-xl">
                                                                    <span class="glyphicon glyphicon-eye-open-xl" aria-hidden="true"></span> 
                                                                    Read
                                                                    </button>                                                     
                                                                <button type="button" class="btn btn-danger btn-xl">
                                                                    <span class="glyphicon glyphicon-trash-xl" aria-hidden="true"></span> 
                                                                    Delete
                                                                    </button>
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
                                                        <th>USER_ID</th>
                                                        <th>ชื่อโรงเรียน</th>
                                                        <th>ชื่อผู้ใช้งาน</th>
                                                        <th>จัดการผู้ใช้งาน</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     @foreach($schools as $school)
                                                        <tr>
                                                            <td>{{$school->user_id}}</td>
                                                            <td>{{$school->name}}</td>
                                                            <td>{{$school->role}}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-xl">
                                                                    <span class="glyphicon glyphicon-eye-open-xl" aria-hidden="true"></span> 
                                                                    Read
                                                                    </button>                                                     
                                                                <button type="button" class="btn btn-danger btn-xl">
                                                                    <span class="glyphicon glyphicon-trash-xl" aria-hidden="true"></span> 
                                                                    Delete
                                                                    </button>
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
