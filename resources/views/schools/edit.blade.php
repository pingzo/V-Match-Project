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
                    <h3>แก้ไขข้อมูลโรงเรียน {{$school->name}}</h3> 
                </div>

                <div class="panel-body">
                                
                    <?= Form::model($school, array('url' => 'schools/' .$school->id, 'method' => 'put')) ?>
                    
                    <div class='col-xs-8'>
                        <div class="form-group">
                            <?= Form::label('name', 'ชื่อโรงเรียน'); ?>
                            <?= Form::text('name', isset($school->schoolsprofile->name) ? 
                                    $school->schoolsprofile->name : null, ['class' => 'form-control', 'placeholder'=>'ชื่อโรงเรียน']); ?>
                         </div>
                    </div>
                    
                    <div class='col-xs-4'>
                        <div class="form-group">
                            <?= Form::label('code', 'รหัสโรงเรียน'); ?>
                            <?= Form::text('code', isset($school->schoolsprofile->code) ? 
                                    $school->schoolsprofile->code : null, ['class' => 'form-control', 'placeholder'=>' รหัสโรงเรียน' ]); ?>
                        </div>
                    </div>
                    
                    <div class='col-xs-4'>
                        <div class="form-group">
                            <?= Form::label('address', 'ที่อยู่โรงเรียน'); ?>
                            <?= Form::text('address', isset($school->schoolsprofile->address) ? 
                                    $school->schoolsprofile->address : null, ['class' => 'form-control', 'placeholder'=>'ที่อยู่โรงเรียน']); ?>
                        </div>
                    </div>
                    
                    <div class='col-xs-4'>
                        <div class="form-group">
                           <?= Form::label('city_id', 'จังหวัด'); ?>
                           <?= Form::select('city_id', App\City::lists('city', 'id'), null,  ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกจังหวัด...']); ?>
                        </div>
                    </div>
                    
                    <div class='col-xs-4'>
                        <div class="form-group">
                            <?= Form::label('tel', 'เบอร์โทรศัพท์โรงเรียน'); ?>
                            <?= Form::text('tel', isset($school->schoolsprofile->tel) ? 
                                    $school->schoolsprofile->tel : null, ['class' => 'form-control', 'placeholder'=>'เบอร์โทรศัพท์โรงเรียน']); ?>
                        </div>
                    </div>
                    
                      <div class='col-xs-4'>
                        <div class="form-group">
                            <?= Form::label('sch_email', 'อีเมลโรงเรียน'); ?>
                            <?= Form::text('sch_email', isset($school->schoolsprofile->sch_email) ? 
                                    $school->schoolsprofile->sch_email : null, ['class' => 'form-control', 'placeholder'=>'อีเมลโรงเรียน']); ?>
                        </div>
                    </div>


                    <div class='col-xs-4'>
                        <div class="form-group">
                           <?php echo Form::label('require_id', 'ความต้องการของโรงเรียน'); ?>
                           <?php echo Form::select('require_id', App\Requirement::lists('Sub_req', 'id'), null,  ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกความต้องการ...']); ?>
                            
                        </div>
                    </div>

                    <div class='col-xs-4'>
                        <div class="form-group">
                            <?= Form::label('role', 'สถานะ'); ?>
                            <?= Form::text('role',  isset($school->schoolsprofile->role) ? 
                                    $school->schoolsprofile->role :null, ['class' => 'form-control', 'placeholder'=>' สถานะ ', 'readonly']); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class='col-sm-10'>
                            <?= Form::submit('บันทึกข้อมูล', ['class'=>'btn btn-primary']); ?>
                        </div>
                    </div>
                  </div>

         <?= Form::close() ?>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
