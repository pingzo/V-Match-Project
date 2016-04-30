@extends('stanley.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ลงทะเบียนสำหรับอาสาสมัคร</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">ชื่อ</label>
                          <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" >
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">นามสกุล</label>
                          <div class="col-md-6">
                                <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" >
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('thai_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">เลขบัตรประจำตัวประชาชน</label>
                          <div class="col-md-6">
                                <input type="text" class="form-control" name="thai_id" value="{{ old('thai_id') }}" >
                                @if ($errors->has('thai_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('thai_id') }}</strong>
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
