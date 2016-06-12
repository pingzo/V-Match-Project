@extends('stanley.index')

@section('content')

<div class="container pt">

<div class="row mt">

<div class="col-md-8 col-md-offset-2">

<div class="panel panel-default">

<div class="panel-heading">ลงทะเบียน</div>

<div class="panel-body">

    <!--Start Form-->
    <form class="form-horizontal" role="form" method="POST" 
            action="{{ url('/register') }}">
            
                        {!! csrf_field() !!}
         
             <!--Start Firstname Field-->
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">ชื่อจริง</label>
                          <div class="col-md-6">
                                <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" >
                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> <!--End Firstname Field-->

                        <!--Start Lastname Field-->
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
                        </div> <!--End Lastname Field-->

                        <!--Start Phone Field-->
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">เบอร์โทรศัพท์</label>
                          <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" >
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> <!--End Phone Field-->
                        
                        <!--Start Email Field-->
                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">อีเมล</label>
                         <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> <!--End Email Field-->
                        
                        <!--Start Password Field-->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">รหัสผ่าน</label>
                           <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> <!--End Password Field-->
                        
                        <!--Start Password_confirm Field-->
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">ยืนยันรหัสผ่าน</label>
                          <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> <!--End Password_confirm Field-->
                        
                        <!--Start Role Radio-->
                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">เลือกสมัครเป็น</label>
                                <div class="col-md-6">
                                    <?=  Form::radio('role', 'volunteer', true); ?> อาสาสมัคร
                                    <?=  Form::radio('role', 'school'); ?> โรงเรียน
                                    @if ($errors->has('role'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('role') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div> <!--End Role Radio-->
                        
                        <!-- ReCaptcha -->
                        <div class="g-recaptcha" data-sitekey="6LdIQyITAAAAAEfgP1NYF5v2y2W5XrQ54IR-mgQ6"></div>

                        <!--Start Submit_reg Button-->
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>ลงทะเบียน
                                </button>
                            </div>
                        </div> <!--End Submit_reg Button-->

    </form> <!--End panel-body-->

</div> <!--End panel-heading-->

</div> <!--End panel panel-default-->

</div> <!--End col-md-8 col-md-offset-2-->

</div> <!--End row mt-->

</div> <!--End container pt-->

@endsection

