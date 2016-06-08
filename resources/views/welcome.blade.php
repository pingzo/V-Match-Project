@extends('stanley.index')

@section('content')

  <div class="container pt">
    <div class="row mt centered">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">

            <h1>เลือกสิ่งที่คุณสนใจ0</h1>

            <hr>

  <!-- +++++ Projects Section +++++ -->

          <div class="col-lg-6">

            <a class="zoom green" href="{{ url('/product') }}"><img class="img-responsive"
                src="assets/img/portfolio/port01.jpg" alt="" />
            </a>

              <p>ค้นหาโรงเรียน</p>

          </div>

          <div class="col-lg-6">

            <a class="zoom green" href="#"><img class="img-responsive"
                src="assets/img/portfolio/port02.jpg" alt="" />
            </a>

              <p>อยากเป็นอาสาอาสาสมัคร</p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
