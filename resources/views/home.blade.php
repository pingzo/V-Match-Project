@extends('stanley.index')

@section('content')
<div class="container pt">
         <div class="row mt">
                  <div class="col-md-10 col-md-offset-1">
            
            <ol class="breadcrumb">
                {{--<li><a href="#">Home</a></li>--}}
                <li class="active">Home</li>
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
                                                  <style>
                                                   .image{
                                                       max-width: 200px;
                                                   }
                                               </style>
                                               <div class="centered">
                                                   <p> <img class="image" src="/images/{{Auth::user()->image_name}}" /></p>
                                               </div> <hr>
                                                  <div class="centered">
                                                          <p> {{Auth::user()->firstname}} ({{Auth::user()->role}})</p>                                                                   
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
                                            @if ( Auth::user()->role =='volunteer')
                                               <p>
                                                    <a href="{{ url('/profiles/'. Auth::user()->id. '/edit') }}" 
                                                        type="button" class="btn btn-primary btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไขข้อมูลส่วนตัว</a>
                                                    <a href="{{ url('/volunteer/'. Auth::user()->id.'/info') }}"
                                                        type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> ดูข้อมูลอาสาสมัคร</a>
                                               </p>
                                            @elseif(Auth::user()->role =='school')
                                                <p>
                                                    <a href="{{ url('/profiles/'. Auth::user()->id. '/edit') }}" 
                                                        type="button" class="btn btn-primary btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไขข้อมูลส่วนตัว</a>
                                                    <a href="{{ url('/schools/'. Auth::user()->id.'/info') }}"
                                                        type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> ดูข้อมูลโรงเรียน</a>
                                               </p>
                                            @elseif(Auth::user()->role =='admin')
                                                <p>
                                                    <a href="{{ url('/profiles/'. Auth::user()->id. '/edit') }}" 
                                                        type="button" class="btn btn-primary btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไขข้อมูลส่วนตัว</a>
                                                    <a href="{{ url('/admin/'. Auth::user()->id.'/index') }}"
                                                        type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-th-list"></span> จัดการข้อมูลสมาชิก</a>
                                               </p>
                                            @endif
                                   </div>
                               
                               <div>                             
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
