@extends('stanley.index')

@section('content')
<div class="container pt">
	<div class="row mt">
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Edit Volunteer Profile</li>            
            </ol>

         <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>เพิ่มข้อมูลกลุ่มอาสาสมัคร</h3> 
                </div>

                <div class="panel-body">

                    <?= Form::model($volunteers, array('url' => 'volunteer/'.$volunteers->user_id.'/edit', 'method' => 'post')) ?>

                    <form class="form-horizontal"> 
                    <div class='col-xs-8'>
                        <div class="form-group">
                            <?= Form::label('group_name', 'ชื่อกลุ่มอาสาสมัคร'); ?>
                            <?= Form::text('group_name', null, ['class' => 'form-control', 'placeholder'=>'ชื่อกลุ่มอาสาสมัคร']); ?>
                         </div>
                    </div>
                        
                        
                    <div class='col-xs-8'>
                        <div class="form-group">
                            <?= Form::label('group_phone', 'เบอร์โทรศัพท์'); ?>
                            <?= Form::text('group_phone', null, ['class' => 'form-control', 'placeholder'=>'เบอร์โทรศัพท์']); ?>
                        </div>
                    </div>
                        
                    <div class='col-xs-8'>
                        <div class="form-group">
                            <?= Form::label('group_email', 'อีเมล'); ?>
                            <?= Form::text('group_email', null, ['class' => 'form-control', 'placeholder'=>'อีเมล']); ?>
                        </div>
                    </div>

                    <div class='col-xs-8'>
                        <div class="form-group">
                            <?= Form::label('group_address', 'ที่อยู่กลุ่มอาสาสมัคร'); ?>
                            <?= Form::textarea('group_address', null, ['class' => 'form-control', 'placeholder'=>'ที่อยู่กลุ่มอาสาสมัคร']); ?>
                         </div>
                    </div>
                        
                     <div class='col-xs-12'>
                         <div class="form-group">
                             <?= Form::label('require_id', 'ความต้องการของอาสาสมัคร'); ?>
                            <?= Form::select('require_id', App\Requirement::lists('Sub_req', 'id'), null,  ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกความต้องการของโรงเรียน...']); ?>
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
