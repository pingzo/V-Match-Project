@extends('stanley.index')

@section('content')
<div class="container pt">
	<div class="row mt">
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Edit Profile</li>
                
            </ol>

         <div class="panel panel-default">
                  <div class="panel-heading">
                           <h3>แก้ไขข้อมูลส่วนตัวของ {{$users->firstname}} ({{$users->role}})</h3>     
                           
                           @if ( Auth::user()->role =='volunteer')
                                    <a href="{{ url('/volunteer/'. Auth::user()->id.'/edit')}}">
                                        <button type="button" class="btn btn-info" >
                                            เพิ่มข้อมูลกลุ่มอาสาสมัคร
                                        </button>
                                    </a>
                           @elseif(Auth::user()->role == 'school')
                                   <button type="button" class="btn btn-info" >
                                       <a href="{{ url('/schools/'. Auth::user()->id.'/edit')}}">เพิ่มข้อมูลโรงเรียน</a>
                                   </button>
                           @endif
                  </div>

                <div class="panel-body">
                    <?= Form::model($users, array('url' => 'profiles/'. $users->id, 'method' => 'put')) ?>

                    <form class="form-horizontal"> 

                        <div class='col-md-6'>
                                <div class="form-group">
                                    <?= Form::label('firstname', 'ชื่อจริง'); ?>
                                    <?= Form::text('firstname', null, ['class' => 'form-control', 'placeholder'=>'ชื่อ']); ?>
                                 </div>
                            </div>

                            <div class='col-md-6'>
                                <div class="form-group">
                                    <?= Form::label('lastname', 'นามสกุล'); ?>
                                    <?= Form::text('lastname', null, ['class' => 'form-control', 'placeholder'=>'สกุล']); ?>
                                 </div>
                            </div>
                            

                            <div class='col-md-6'>
                                <div class="form-group">
                                    <?= Form::label('email', 'อีเมล'); ?>
                                    <?= Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'เช่น name@gmail.com']); ?>
                                </div>
                            </div>

                            <div class='col-md-6'>
                                <div class="form-group">
                                    <?= Form::label('phone', 'เบอร์โทรศัพท์'); ?>
                                    <?= Form::text('phone',  null, ['class' => 'form-control', 'placeholder'=>'เช่น 0835679xxx']); ?>
                                </div>
                            </div>

                        <div class="form-group">
                                <div class='col-sm-10'>
                                    <?= Form::submit('บันทึกการแก้ไข', ['class'=>'btn btn-primary']); ?>
                                </div>
                             </div>                         
                </form> 

                <?= Form::close() ?>

                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
