@extends('stanley.index')

@section('content')
<div class="container pt">
	<div class="row mt">
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li class="active">Edit Volunteer Profile</li>            
            </ol>

         <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>เพิ่มข้อมูลกลุ่มอาสาสมัครของ</h3> 
                </div>

                        <div class="panel-body">
                    @include('common.errors')
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                 @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                   @endforeach
                            </ul>
                        </div>
                    @endif
                    
                  <?= Form::model($volunteers, array('url' => 'volunteer/', 'method' => 'post')) ?>
                    {!! csrf_field() !!}

                    <div class='col-xs-12'>
                         <div class="form-group {{ $errors->has('group_name') ? ' has-error' : '' }}">
                            <?= Form::label('group_name', 'ชื่อกลุ่มอาสาสมัคร'); ?>
                             <input type="text" name="group_name" id="task-name" class="form-control" value="{{ old('group_name') }}">
                            @if ($errors->has('group_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('group_name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    
                    <div class='col-xs-6'>
                         <div class="form-group {{ $errors->has('group_phone') ? ' has-error' : '' }}">
                            <?= Form::label('group_phone', 'เบอร์โทรศัพท์'); ?>
                             <input type="text" name="group_phone" id="task-name" class="form-control" value="{{ old('group_phone') }}">
                            @if ($errors->has('group_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('group_phone') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    
                                          <div class='col-xs-6'>
                           <div class="form-group {{ $errors->has('group_email') ? ' has-error' : '' }}">
                            <?= Form::label('group_email', 'อีเมล'); ?>
                            <input type="text" name="group_email" id="task-name" class="form-control" value="{{ old('group_email') }}">
                            @if ($errors->has('group_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('group_email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class='col-xs-12'>
                         <div class="form-group {{ $errors->has('group_address') ? ' has-error' : '' }}">
                            <?= Form::label('group_address', 'ที่อยู่'); ?>
                             <textarea name="group_address" id="task-name" class="form-control" rows="3" value="{{ old('group_address') }}" ></textarea>
                            @if ($errors->has('group_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('group_address') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    
                    <!--Dropdown LIst-->
                            <div class='col-xs-12'>
                                <div class="form-group {{ $errors->has('require_id') ? ' has-error' : '' }}">
                                    <?= Form::label('require_id', 'ความต้องการของอาสาสมัคร'); ?>
                                    <?= Form::select('require_id', App\Requirement::lists('Sub_req', 'id'), null,  
                                        ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกความต้องการของโรงเรียน...']); ?>
                                    @if ($errors->has('require_id'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('require_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>  <!-- End Dropdown LIst-->  
                    <hr>

                    <!--Check LIst Money-->
              <!--      <div class='col-xs-4'>
                        <div class="form-group {{ $errors->has('require_id') ? ' has-error' : '' }}">
                        <p>เงิน</p>    
                          <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="require_id[1]" value="RM01">
                                    ทุนการศึกษา
                                </label>
                          </div>
                        <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="require_id[2]" value="RM02">
                                    ทุนพัฒนาโรงเรียน
                                </label>
                          </div>
                        <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="require_id[3]" value="RM03">
                                    ทุนอาหารกลางวัน
                                </label>
                          </div>
                        </div>
                    </div>  <!-- End Check LIst Money--> 
                    
                    <!--Check LIst Things-->
                   <!-- <div class='col-xs-4'>
                        <div class="form-group {{ $errors->has('require_id') ? ' has-error' : '' }}">
                                <p>สิ่งของ</p>
                                   <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="require_id[4]" value="RO01">
                                    ยาและเวชภัณฑ์
                                </label>
                          </div>
                        <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="require_id[5]"  value="RO02">
                                    อุปกรณ์ก่อสร้าง
                                </label>
                          </div>
                        <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="require_id[6]"  value="RO03">
                                    อุปกรณ์การเรียน
                                </label>
                          </div>
                        </div>
                    </div>  <!-- End Check LIst Things-->
                    
                    <!--Check List Effort-->
                   <!-- <div class='col-xs-4'>
                        <div class="form-group {{ $errors->has('require_id') ? ' has-error' : '' }}">
                        <p>แรงงาน</p>
                                   <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="require_id[7]"  value="RL01">
                                    ค่ายอาสา
                                </label>
                          </div>
                        <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="require_id[8]"  value="RL02">
                                    ครูอาสา
                                </label>
                          </div>
                        </div>
                    </div>  <!-- End Check List Effort--> 

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
