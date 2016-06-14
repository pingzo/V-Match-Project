@extends('stanley.index')

@section('content')
<div class="container pt">
	<div class="row mt">
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><a href="{{ url('/home') }}">หน้าลัก</a></li>
                <li class="active">แก้ไขข้อมูลส่วนตัว</li>
                
            </ol>

         <div class="panel panel-default">
                  <div class="panel-heading">
                           <h3>แก้ไขข้อมูลส่วนตัวของ {{$users->firstname}} ({{$users->role}})</h3>     
                           
                           @if (count($errors) <= 0 )
                                    @if ( Auth::user()->role =='volunteer'&&$isVolunteer)
                                             <a href="{{ url('/volunteer/'. Auth::user()->id.'/create')}}">
                                                 <button type="button" class="btn btn-info" >
                                                     <span class="glyphicon glyphicon-plus"></span>
                                                     เพิ่มข้อมูลกลุ่มอาสาสมัคร
                                                 </button>
                                             </a>

                                    @elseif(Auth::user()->role == 'school'&&$isSchool)
                                            <a href="{{ url('/schools/'. Auth::user()->id.'/create')}}">
                                                 <button type="button" class="btn btn-info" >
                                                     <span class="glyphicon glyphicon-plus"></span>
                                                     เพิ่มข้อมูลโรงเรียน
                                                 </button>
                                            </a>
                                    @endif
                           @endif
                  </div>

                <div class="panel-body">
                    <?= Form::model($users, array('url' => 'profiles/'. $users->id.'/edit', 'method' => 'post','enctype'=>'multipart/form-data')) ?>

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
                        
                        <div class="col-xs-4">
                        <div class="form-group">
                            <?= Form::label('image', 'รูปภาพ'); ?>
                            <?= Form::file('image', null, ['class' => 'formcontrol'])
                            ?>
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

@section('footer')
    @if (session()->has('status'))
        <script>
            swal({
                title: "<?php echo session()->get('status'); ?>",
                text: "ผลการทำงาน",
                timer: 2000,
                type: 'success',
                showConfirmButton: false
            });
        </script>
    @endif
@endsection