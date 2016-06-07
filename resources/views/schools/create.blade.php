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
                    <h3>เพิ่มข้อมูลโรงเรียนของ {{Auth::user()->firstname}}</h3>
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
                    
                    <?= Form::model($schools, array('url' => '/schools' ,  'method' => 'post')) ?>      
                    {!! csrf_field() !!}

                   <div class='col-xs-12'>
                        <div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
                            <?= Form::label('code', 'รหัสโรงเรียน'); ?>
                            <input type="text" name="code" id="task-name" class="form-control" value="{{ old('code') }}">
                            @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class='col-xs-12'>
                         <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <?= Form::label('name', 'ชื่อโรงเรียน'); ?>
                             <input type="text" name="name" id="task-name" class="form-control" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    
                    <div class='col-xs-6'>
                         <div class="form-group {{ $errors->has('tel') ? ' has-error' : '' }}">
                            <?= Form::label('tel', 'เบอร์โทรศัพท์โรงเรียน'); ?>
                             <input type="text" name="tel" id="task-name" class="form-control" value="{{ old('tel') }}">
                            @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    
                      <div class='col-xs-6'>
                           <div class="form-group {{ $errors->has('sch_email') ? ' has-error' : '' }}">
                            <?= Form::label('sch_email', 'อีเมลโรงเรียน'); ?>
                            <input type="text" name="sch_email" id="task-name" class="form-control" value="{{ old('sch_email') }}">
                            @if ($errors->has('sch_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sch_email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
         <hr>                           
                    <div class='col-xs-12'>
                         <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                            <?= Form::label('address', 'ที่อยู่โรงเรียน'); ?>
                             <textarea name="address" id="task-name" class="form-control" rows="3" value="{{ old('address') }}" ></textarea>
                            @if ($errors->has('address'))rows="3"
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class='col-xs-4'>
                         <div class="form-group {{ $errors->has('city_id') ? ' has-error' : '' }}">
                            <?= Form::label('city_id', 'จังหวัด'); ?>
                            <?= Form::select('city_id', App\City::lists('city', 'id'), null,  ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกจังหวัด...']); ?>
                             @if ($errors->has('city_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
         <hr>           
                   <div class='col-xs-12'>
                         <div class="form-group {{ $errors->has('require_id') ? ' has-error' : '' }}">
                             <?= Form::label('require_id', 'ความต้องการของโรงเรียน'); ?>
                            <?= Form::select('require_id', App\Requirement::lists('Sub_req', 'id'), null,  ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกความต้องการของโรงเรียน...']); ?>
                            @if ($errors->has('require_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('require_id') }}</strong>
                                    </span>
                                @endif
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
