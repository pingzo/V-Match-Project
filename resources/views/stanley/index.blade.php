<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ url('../../docs-assets/ico/favicon.png') }}">

    <title>V-Match</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Custom JS for this template -->
    <script src="{{ url('https://code.jquery.com/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ url('assets/js/hover.zoom.js') }}"></script>
    <script src="{{ url('assets/js/hover.zoom.conf.js') }}"></script>
    
    <!-- ReCaptcha  -->
    <!--<script src='https://www.google.com/recaptcha/api.js'></script> -->
    <script src='https://www.google.com/recaptcha/api.js?hl=th'></script>

  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top ">
      <div class="container">
        <div class="navbar-header">

         <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="{{ url('/') }}">
              V-Match
            {{--<img class="img-responsive" src="assets/img/rz-icon.png" alt="">--}}

          </a>
         </div>

     <!-- Right Side Of Navbar -->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right ">

               <!-- Authentication Links -->
                  @if (Auth::guest())

                            <li><a href="{{ url('/aboutus') }}">เกี่ยวกับเรา</a></li>
                            <li><a href="{{ url('/login') }}">เข้าสู่ระบบ</a></li>
                            <li><a href="{{ url('/preregister') }}">สร้างบัญชีผู้ใช้</a></li>
                           
                  @else
                            <li><a href="{{ url('/home') }}">หน้าหลัก</a></li>
                            <li><a href="{{ url('/aboutus') }}">เกี่ยวกับเรา</a></li>
                  <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->firstname }} ({{ Auth::user()->role }})
                                <span class="caret"></span>
                            </a>
                      <ul class="dropdown-menu" role="menu">
                          
                                @if ( Auth::user()->role =='school')
                                   <li><a href="{{ url('/profiles/'.
                                     Auth::user()->id. '/edit') }}">แก้ไขข้อมูลส่วนตัว</a>
                                    </li>
                                    <li><a href="{{ url('/schools/'.
                                     Auth::user()->id. '/info') }}">ดูข้อมูลโรงเรียน</a>
                                    </li>
                                    <li><a href="{{ url('/schools/'.
                                     Auth::user()->id. '/edit') }}">แก้ไขข้อมูลโรงเรียน</a>
                                    </li>                              
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>
                                            <span class="glyphicon glyphicon-log-out"></span> ออกจากระบบ</a>
                                    </li>
                                @elseif(Auth::user()->role == 'volunteer')
                                      <li><a href="{{ url('/profiles/'. Auth::user()->id.'/edit')}}">แก้ไขข้อมูลส่วนตัว</a>
                                      </li>
                                      <li><a href="{{ url('/volunteer/'. Auth::user()->id.'/edit') }}">แก้ไขข้อมูลกลุ่มอาสาสมัคร</a>
                                      </li>
                                      <li><a href="{{ url('/volunteer/'. Auth::user()->id. '/info') }}">การจับคู่ความต้องการ</a></li>
                                      <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>
                                              <span class="glyphicon glyphicon-log-out"></span> ออกจากระบบ</a>
                                      </li>                             
                                @elseif(Auth::user()->role == 'admin')
                                      <li><a href="{{ url('/admin/'. Auth::user()->id. '/index') }}">
                                              <span class="glyphicon glyphicon-th-list"></span> จัดการระบบ</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>
                                            <span class="glyphicon glyphicon-log-out"></span> ออกจากระบบ</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                  @endif
          </ul>
      </div><!--/.nav-collapse -->
    </div>
    </div>
    
    <script>
            swal("Here's a message!")
      </script>
    @yield('content')

	<!-- +++++ Footer Section +++++ -->
	<div id="footer">
		<div class="container">
			<div class="row" align="center">
                <div class="col-lg-12">
					<h4>Contact Us</h4>
					<p><span class="glyphicon glyphicon-envelope"></span> E-mail: pp.puttipat@gmail.com <br>
                        <span class="glyphicon glyphicon-phone-alt"></span> Tel: 083-5679350
                    </p>
				</div><!-- /col-lg-4 -->
			</div>
		</div>
	</div>

         @yield('footer')

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/sweetalert.min.js') }}" type="text/javascript"></script>
   
    @yield('jszone')

  </body>
</html>
