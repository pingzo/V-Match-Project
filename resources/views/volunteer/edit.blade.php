@extends('stanley.index')

@section('content')
<div class="container pt">
	<div class="row mt">
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><a href="{{ url('/home') }}">หน้าหลัก</a></li>
                <li class="active">แก้ไขข้อมูลอาสาสมัคร</li>
            </ol>

         <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>แก้ไขข้อมูลกลุ่มอาสาสมัคร</h3>
                </div>

                <div class="panel-body">

                    <?= Form::model($volunteers, array('url' => 'volunteer/'.$volunteers->user_id.'/edit', 'method' => 'post','enctype'=>'multipart/form-data')) ?>

                    <form class="form-horizontal"> 
                    <div class='col-xs-12'>
                        <div class="form-group">
                            <?= Form::label('group_name', 'ชื่ออาสาสมัคร'); ?>
                            <?= Form::text('group_name', null, ['class' => 'form-control', 'placeholder'=>'ชื่ออาสาสมัคร']); ?>
                         </div>
                    </div>
                        
                        
                    <div class='col-xs-6'>
                        <div class="form-group">
                            <?= Form::label('group_phone', 'เบอร์โทรศัพท์'); ?>
                            <?= Form::text('group_phone', null, ['class' => 'form-control', 'placeholder'=>'เบอร์โทรศัพท์']); ?>
                        </div>
                    </div>
                        
                    <div class='col-xs-6'>
                        <div class="form-group">
                            <?= Form::label('group_email', 'อีเมล'); ?>
                            <?= Form::text('group_email', null, ['class' => 'form-control', 'placeholder'=>'อีเมล']); ?>
                        </div>
                    </div>

                    <div class='col-xs-12'>
                        <div class="form-group">
                            <?= Form::label('group_address', 'ที่อยู่อาสาสมัคร'); ?>
                            <?= Form::text('group_address', null, ['class' => 'form-control', 'placeholder'=>'ที่อยู่อาสาสมัคร']); ?>
                         </div>
                    </div>
                        
                        <div class="col-xs-4">
                        <div class="form-group">
                            <?= Form::label('image', 'รูปภาพ'); ?>
                            <?= Form::file('image', null, ['class' => 'formcontrol'])
                            ?>
                        </div>
                    </div>
                        
                     <div class='col-xs-12'>
                         <div class="form-group">
                             <?= Form::label('require_id', 'ความต้องการของอาสาสมัคร'); ?>
                            <?= Form::select('require_id', App\Requirement::lists('Sub_req', 'id'), null,  ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกความต้องการหลัก...']); ?>
                        </div>
                    </div>      



                     <div class="form-group">
                        <div class='col-sm-10'>
                            <?= Form::submit('บันทึกการแก้ไข', ['class'=>'btn btn-primary']); ?>
                        </div>
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
