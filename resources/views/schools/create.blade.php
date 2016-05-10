@extends('stanley.index')

@section('content')
<div class="container pt">
    <div class="row mt">
        <div class="col-md-10 col-md-offset-1">         

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Create School Profile</li>

            </ol>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>เพิ่มข้อมูลโรงเรียน</h3>
                           @if(Auth::check())
                                   {{Auth::user()->id}}
                           @endif
                </div>


                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                 @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                   @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <?= Form::model($school,  array('url' => 'schools/' .$school->id, 'files' => 'true')) ?>      
                    {!! csrf_field() !!}
                            
                    <div class='col-xs-4'>
                        <div class="form-group">
                            <?= Form::label('role', 'สถานะ'); ?>
                            <?= Form::text('role', null, ['class' => 'form-control', 'placeholder'=>' สถานะ ', 'readonly']); ?>
                        </div>
                    </div>

                    <div class='col-xs-8'>
                        <div class="form-group">
                            <?= Form::label('code', 'รหัสโรงเรียน'); ?>
                            <?= Form::text('code', null, ['class' => 'form-control', 'placeholder'=>' รหัสโรงเรียน ']); ?>
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
                            <?= Form::label('address', 'ที่อยู่โรงเรียน'); ?>
                            <?= Form::textarea('address', null, ['class' => 'form-control', 'placeholder'=>'ที่อยู่โรงเรียน']); ?>
                        </div>
                    </div>
                    
                    <div class='col-xs-4'>
                        <div class="form-group">
                           <?= Form::label('id', 'จังหวัด'); ?>
                           <?= Form::select('id', App\City::lists('city', 'id'), null,  ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกจังหวัด...']); ?>
                        </div>
                    </div>
                    
                    <div class='col-xs-4'>
                        <div class="form-group">
                            <?= Form::label('tel', 'เบอร์โทรศัพท์โรงเรียน'); ?>
                            <?= Form::text('tel',  null, ['class' => 'form-control', 'placeholder'=>'เบอร์โทรศัพท์โรงเรียน']); ?>
                        </div>
                    </div>
                    
                      <div class='col-xs-4'>
                        <div class="form-group">
                            <?= Form::label('sch_email', 'อีเมลโรงเรียน'); ?>
                            <?= Form::text('sch_email',  null, ['class' => 'form-control', 'placeholder'=>'อีเมลโรงเรียน']); ?>
                        </div>
                    </div>

                    <hr/>

                    <div class='col-xs-12'>
                        <div class="form-group">
                           <?= Form::label('id', 'ความต้องการของโรงเรียน'); ?>
                           <?= Form::select('id', App\Requirement::lists('Sub_req', 'id'), null,  ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกความต้องการของโรงเรียน...']); ?>
                        </div>
                    </div>
                    
                  <div class="col-xs-4">
                           <div class="form-group">
                                   <?= Form::label('image', 'รูปภาพ'); ?>
                                    <?= Form::file('image', null, ['class' => 'formcontrol']) ?>
                            </div>
                  </div>

         <!--   <div class='col-xs-12'>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="RL01">
                            ค่ายอาสา
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="RL02" >
                            ครูอาสา
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="RM01" >
                            ทุนการศึกษา
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="RM02" >
                            ทุนพัฒนาโรงเรียน
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="RM03" >
                            ทุนอาหารกลางวัน
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="RO01" >
                            ยาและเวชภัณฑ์
                        </label>
                    </div> 

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="RO02" >
                            อุปกรณ์ก่อสร้าง
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="RO03" >
                            อุปกรณ์การเรียน
                        </label>
                    </div> 
                    
               </div>       -->           
                 
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
