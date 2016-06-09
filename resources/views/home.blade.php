@extends('stanley.index')

@section('content')
<div class="container pt">
         <div class="row mt">
                  <div class="col-md-10 col-md-offset-1">
            
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">home</li>
            </ol>
            
            <div class="panel panel-default">
             <div class="panel-heading">
                           @if(Auth::check())
                             ( You are logged in! )
                           @else
                               (not have a user login!!)
                           @endif          
                           This is Your Profile.
             </div>             
                  <div id="ww">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 ">    
                           <div class="row">
                                         <div class="col-xs-4">
                                           <div class="thumbnail">
                                                  <img src="{{ url('assets/img/port05.jpg') }}" alt="..."> <hr>
                                                  <div class="centered">
                                                          <p> {{Auth::user()->firstname}} ({{Auth::user()->role}})</p>
                                                          <h5>({{Auth::user()->created_at}})</h5>                                                                         
                                                  </div>
                                            </div>          
                                         </div>
                                   <div class="col-xs-6">
                                       <h2>ข้อมูลส่วนตัว </h2>
                                               ชื่อ-นามสกุล: {{Auth::user()->firstname}} {{Auth::user()->lastname}} <br>
                                               เบอร์โทรศัพท์: {{Auth::user()->phone}} <br>
                                               อีเมล: {{Auth::user()->email}} <br>
                                               สถานะ: {{Auth::user()->role}}         
                                               <hr>
                                               <p>
                                                    <a href="{{ url('/profiles/'. Auth::user()->id. '/edit') }}" 
                                                        type="button" class="btn btn-primary btn-sm">แก้ไขข้อมูลส่วนตัว</a>
                                                    <a href="{{ url('/volunteer/'. Auth::user()->id.'/index') }}"
                                                        type="button" class="btn btn-primary btn-sm">ดูข้อมูลอาสาสมัคร</a>
                                                    <a type="button" class="btn btn-primary btn-sm">Extra small button</a>
                                               </p>
                                   </div>
                             </div>
                         </div> <!-- /col-lg-10 col-lg-offset-1 -->
                     </div><!-- /row -->
                    </div><!-- /ww -->         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
