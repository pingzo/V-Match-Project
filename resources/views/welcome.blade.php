@extends('stanley.index')

@section('content')

  <div class="container pt">
    <div class="row mt centered">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body" style="background-color: rgb(235, 236, 237);">

            <h1>เลือกสิ่งที่คุณสนใจ</h1>

  <!-- +++++ Projects Section +++++  -->

          <div class="col-lg-6">
            <a class="zoom green" href="{{ url('/product') }}">
                <center><img class="img-responsive" src="assets/img/search2.png" alt="" /></center>
            </a>
            <br><p>ค้นหาโรงเรียน</p>
          </div>

          <div class="col-lg-6">
            <a class="zoom green" href="{{ url('/preregister') }}">
              <center> <img class="img-responsive" src="assets/img/volunteer2.png" alt="" /></center>
            </a>
              <br><p>เข้าใช้งานกับ V-Match</p>
          </div>
  
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
