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
                           <img src="{{ url('assets/img/rz-icon3.png') }}" alt="Stanley">
                           <h1>เกี่ยวกับ V-MATCH !</h1>

                           <p>V-Match ถูกจัดทำเพื่อช่วยเหลือและอำนวยความสะดวกแก่ 'อาสาสมัคร' ที่ต้องการเข้าไปช่วยเหลือ 'โรงเรียน'
                               ให้ได้มีโอกาสได้รับความช่วยเหลืออย่างทั่วถึงและแท้จริง
                           </p>

                           <p>โดยให้ทั้งอาสาสมัครและโรงเรียนบอกความต้องการของทั้งสองฝ่ายไว้กับ V-Match เพื่อจะทำการจับคู่
                               ความต้องการที่ตรงกันให้กับอาสาสมัคร นอกจากนี้แล้วทั้งโรงเรียนและอาสาสมัครยังสามารถค้นหาโรงเรียนได้จากเงื่อนไขที่ได้กำหนดไว้ให้อีกด้วย
                           </p>
                          <p>เมื่อเข้าใจวัตถุประสงค์ของ V-Match แล้ว และพร้อมจะเข้าร่วมเป็นส่วนหนึ่งกับเรา <br>

                           </p>


                      @if (Auth::guest())
                          <p>
                              <a href="{{ url('/preregister') }}">
                                  <button type="button" class="btn btn-info btn-lg" >คลิกเลย!</button>
                              </a>
                          </p>
                      @endif
                        
                  </div><!-- /col-lg-8 -->
	</div><!-- /row -->
	</div><!-- /ww -->
                  </div> <!-- /panel-body-->

            </div>
        </div>
    </div>
</div>

@endsection
