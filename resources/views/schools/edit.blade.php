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
                    <h3>แก้ไขข้อมูลโรงเรียน </h3> 
                </div>

                <div class="panel-body">
                       
                    <?= Form::model($school, array('url' => 'schools/', 'method' => 'put')) ?>
                  <form class="form-horizontal"> 
                   <div class='col-xs-12'>
                        <div class="form-group">
                            <?= Form::label('code', 'รหัสโรงเรียน'); ?>
                            <?= Form::text('code', $school->code, ['class' => 'form-control', 'placeholder'=>'รหัสโรงเรียน']); ?>
<!--                            <input type="text" name="code" id="task-name" class="form-control" value="{{ old('code') }}">-->
                        </div>
                    </div>

                    <div class='col-xs-12'>
                         <div class="form-group">
                            <?= Form::label('name', 'ชื่อโรงเรียน'); ?>
                             <?= Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'ชื่อโรงเรียน']); ?>
<!--                             <input type="text" name="name" id="task-name" class="form-control" value="{{ old('name') }}">-->
                        </div>
                    </div>
                    
                    <div class='col-xs-6'>
                         <div class="form-group">
                            <?= Form::label('tel', 'เบอร์โทรศัพท์โรงเรียน'); ?>
                             <?= Form::text('tel', null, ['class' => 'form-control', 'placeholder'=>'เบอร์โทรศัพท์โรงเรียน']); ?>
<!--                             <input type="text" name="tel" id="task-name" class="form-control" value="{{ old('tel') }}">-->
                        </div>
                    </div>
                    
                      <div class='col-xs-6'>
                           <div class="form-group">
                            <?= Form::label('sch_email', 'อีเมลโรงเรียน'); ?>
                            <?= Form::text('sch_email', null, ['class' => 'form-control', 'placeholder'=>'อีเมลโรงเรียน']); ?>
<!--                            <input type="text" name="sch_email" id="task-name" class="form-control" value="{{ old('sch_email') }}">-->
                        </div>
                    </div>
         <hr>                           
                    <div class='col-xs-12'>
                         <div class="form-group">
                            <?= Form::label('address', 'ที่อยู่โรงเรียน'); ?>
                             <?= Form::textarea('address', null, ['class' => 'form-control', 'placeholder'=>'ที่อยู่โรงเรียน']); ?>
<!--                             <textarea name="address" id="task-name" class="form-control" rows="3" value="{{ old('address') }}" ></textarea>-->
                        </div>
                    </div>
                    
                    <div class='col-xs-4'>
                         <div class="form-group">
                            <?= Form::label('city_id', 'จังหวัด'); ?>
                            <?= Form::select('city_id', App\City::lists('city', 'id'), null,  ['class' => 'form-control']); ?>
                        </div>
                    </div>
         <hr>           
                   <div class='col-xs-12'>
                         <div class="form-group">
                             <?= Form::label('require_id', 'ความต้องการของโรงเรียน'); ?>
                            <?= Form::select('require_id', App\Requirement::lists('Sub_req', 'id'), null,  ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกความต้องการของโรงเรียน...']); ?>
                        </div>
                    </div>             
                  
                           <div class="form-group">
                                    <div class='col-sm-10'>   
                                            <?= Form::submit('บันทึกข้อมูล', ['class'=>'btn btn-primary']); ?>
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
