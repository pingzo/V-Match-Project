@extends('stanley.index')

@section('content')
<div class="container pt">
    <div class="row mt ">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

             <!-- +++++ Welcome Section +++++ -->
                  <div class="panel-body">
	<div id="ww">
	<div class="row">
                  <div class="col-lg-8 col-lg-offset-2 centered">
                      <h1> ข้อตกลงสำหรับการสร้างบัญชีผู้ใช้ !</h1>
                        <img src="{{ url('assets/img/user.png') }}" alt="Stanley">
                        <br>
                            <p>
                                1. กรอกข้อมูลของท่านตามความเป็นจริง <br>
                                2. กรอกข้อมูลของท่านให้ครบถ้วน และถูกต้องตามเครื่องหมาย * <br>
                                3. เลือกสิทธ์ในการสมัครของท่านตามการใช้งานอย่างใดอย่างหนึ่ง
                            </p>

                           
                           @if (Auth::guest())
                           <p class="centered">
                           <a href="{{ url('/register') }}">
                                <button type="button" class="btn btn-info btn-lg" >ยอมรับข้อตกลง</button>
                           </a>                  
                           </p>
                           @endif
	
                  </div><!-- /col-lg-8 -->
	</div><!-- /row -->
	</div><!-- /ww -->


                    
                  </div><!-- /col-lg-8 -->
	</div><!-- /row -->
	</div><!-- /ww -->
                  </div> <!-- /panel-body-->

            </div>
        </div>
    </div>
</div>
@endsection
