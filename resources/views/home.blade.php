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
             <div class="panel-heading">This is Your Profile</div>
                <div class="panel-body">
                                   @if(Auth::check())
                                    You are logged in! <br/>
                  <hr>                             
                           <div class="row">
                                         <div class="col-xs-4">
                                           <div class="thumbnail">
                                                  <img src="{{ url('assets/img/port05.jpg') }}" alt="..."> <hr>
                                                  <div class="centered">
                                                          <p> {{Auth::user()->firstname}}</p><h5>({{Auth::user()->role}})</h5>                                                                         
                                                  </div>
                                            </div>          
                                         </div>
                                   <div class="col-xs-6">
                                       <h2>ข้อมูลส่วนตัว</h2>
                                               ชื่อ-นามสกุล: {{Auth::user()->firstname}} {{Auth::user()->lastname}} <br>
                                               เบอร์โทรศัพท์: {{Auth::user()->phone}} <br>
                                               อีเมล: {{Auth::user()->email}} <br>
                                               สถานะ: {{Auth::user()->role}}                                              
                                   </div>
                             </div>
                                   @else
                                            <?= 'not have a user login'; ?>
                                   @endif
                          </dl>                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
