@extends('stanley.index')

@section('content')

<div class="container pt">
	<div class="row mt">
        <div class="col-md-10 col-md-offset-1">     
            
            <ol class="breadcrumb">
                <li><a href="{{ url('/home') }}">หน้าหลัก</a></li>
                <li class="active">แก้ไขข้อมูลโรงเรียน</li>
            </ol>
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>แก้ไขข้อมูลโรงเรียน </h3> 
                </div>

                <div class="panel-body">
                       
                    <?= Form::model($school, array('url' => 'schools/'.$school->user_id.'/edit', 'method' => 'post','enctype'=>'multipart/form-data')) ?>
                  <form class="form-horizontal"> 
                   <div class='col-xs-12'>
                        <div class="form-group">
                            <?= Form::label('code', 'รหัสโรงเรียน'); ?>
                            <?= Form::text('code', $school->code, ['class' => 'form-control', 'value'=>'$school->code','readonly']); ?>

                        </div>
                    </div>

                    <div class='col-xs-12'>
                         <div class="form-group">
                            <?= Form::label('name', 'ชื่อโรงเรียน'); ?>
                             <?= Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'ชื่อโรงเรียน']); ?>

                        </div>
                    </div>
                    
                    <div class='col-xs-6'>
                         <div class="form-group">
                            <?= Form::label('tel', 'เบอร์โทรศัพท์โรงเรียน'); ?>
                             <?= Form::text('tel', null, ['class' => 'form-control', 'placeholder'=>'เบอร์โทรศัพท์โรงเรียน']); ?>

                        </div>
                    </div>
                    
                      <div class='col-xs-6'>
                           <div class="form-group">
                            <?= Form::label('sch_email', 'อีเมลโรงเรียน'); ?>
                            <?= Form::text('sch_email', null, ['class' => 'form-control', 'placeholder'=>'อีเมลโรงเรียน']); ?>

                        </div>
                    </div>
         <hr>                           
                    <div class='col-xs-12'>
                         <div class="form-group">
                            <?= Form::label('address', 'ที่อยู่โรงเรียน'); ?>
                             <?= Form::text('address', null, ['class' => 'form-control', 'placeholder'=>'ที่อยู่โรงเรียน']); ?>

                        </div>
                    </div>
         
                    <div class="col-xs-4">
                        <div class="form-group">
                            <?= Form::label('image', 'รูปภาพ'); ?>
                            <?= Form::file('image', null, ['class' => 'formcontrol'])
                            ?>
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

                      <div class='col-xs-12'>
                          <div class="form-group">
                          <?= Form::label('require_etc', 'ความต้องการอื่นๆของโรงเรียน'); ?>
                          <?= Form::text('require_etc', null, ['class' => 'form-control', 'placeholder'=>'ความต้องการอื่นๆของโรงเรียน']); ?>
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
