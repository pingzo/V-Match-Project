@extends('stanley.index')

@section('content')
<div class="container pt">
	<div class="row mt">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ลงทะเบียนสำหรับโรงเรียน</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/schoolreg') }}">
                    
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">ชื่อโรงเรียน</label>
                          <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">รหัสโรงเรียน</label>
                          <div class="col-md-6">
                                <input type="text" class="form-control" name="code" value="{{ old('code') }}" >
                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">จังหวัด</label>
                          <div class="col-md-6">
                                <input type="text" class="form-control" name="city_id" value="{{ old('city_id') }}" >
                                @if ($errors->has('city_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-6">                                  
                                        <?= Form::checkbox('role', 'school'); ?> ยืนยันการสมัคร
                                            @if ($errors->has('role'))
                                                     <span class="help-block">
                                                              <strong>{{ $errors->first('role') }}</strong>
                                                     </span>
                                            @endif
                                    </div>
                           </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>ลงทะเบียน
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
