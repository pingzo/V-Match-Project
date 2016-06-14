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
                      <h1> ข้อตกลงสำหรับการสร้างบัญชีผู้ใช้ </h1>
                      <style>
                          .image{
                              margin-bottom: 20px;
                          }
                      </style>
                        <img class="image" src="{{ url('assets/img/user.png') }}" alt="Stanley"><br>
                  </div><!-- /col-lg-8 -->

                        <br>

                        <div class="col-lg-8 col-lg-offset-2 ">

                            <p>   1. กรอกข้อมูลของท่านตามความเป็นจริง </p><br>
                            <p>   2. กรอกข้อมูลของท่านให้ครบถ้วน และถูกต้องตามเครื่องหมาย * </p><br>
                            <p>   3. เลือกสิทธ์ในการสมัครของท่านตามการใช้งานอย่างใดอย่างหนึ่ง </p><br>
                            <p>   4. อีเมลใช้สำหรับเป็น'ชื่อผู้ใช้'ในการเข้าสู่ระบบ</p><br>
                            <p>   5. บัญชีในการสมัครนี้เป็นเพียงบัญชีตัวแทนในการจัดการบัญชีโรงเรียนหรืออาสาสมัครตามสิทธ์ในการสมัครที่ท่านเลือก</p>

                            <br>

                           @if (Auth::guest())
                           <p class="centered">
                           <a href="{{ url('/register') }}">
                                <button type="button" class="btn btn-info btn-lg" >ยอมรับข้อตกลง</button>
                           </a>                  
                           </p>
                           @endif
                        </div>
	

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
