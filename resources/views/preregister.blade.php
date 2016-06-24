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

                            <p>   1. กรอกข้อมูลของท่านตามความเป็นจริง ห้ามแอบอ้างข้อมูลของผู้อื่น</p>
                            <p>   2. กรอกข้อมูลของท่านให้ครบถ้วนตามเครื่องหมาย * และให้ถูกต้อง </p>
                            <p>   3. เลือกสิทธ์ในการสมัครของท่านตามการใช้งาน เพียงอย่างใดอย่างหนึ่ง </p>
                            <p>   4. อีเมลจะใช้สำหรับเป็น 'ชื่อผู้ใช้' ในการเข้าสู่ระบบ</p>
                            <p>   5. บัญชีในการสมัครนี้เป็นเพียงบัญชีตัวแทนในการจัดการบัญชีโรงเรียนหรืออาสาสมัครตามสิทธ์ในการสมัครที่ท่านเลือก</p>
                            <p>   6. หากเกิดข้อผิดพลาดจากผู้ใช้เอง สามารถติดต่อผู้ดูแลระบบได้ที่
                                     อีเมล pp.puttipat@gmail.com หรือ โทร. 0835679350</p>

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
