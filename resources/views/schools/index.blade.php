@extends('stanley.index')

@section('content')

<div class="container pt">
    <div class="row mt">
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">School Profile</li>
            </ol>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="ww">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 ">       
                                  <!--Admin Mark Star-->          
                                @include('profiles.star')
                                <div class="row">
                                         <div class="col-xs-4">
                                           <div class="thumbnail">
                                                  <img src="{{ url('assets/img/port05.jpg') }}" alt="..."> <hr>
                                                  <div class="centered">
                                                          <p>โรงเรียน: {{$schools->name}}</p>                                                                         
                                                  </div>
                                            </div>          
                                         </div>
                                   <div class="col-xs-6">
                                               <h2>ข้อมูลโรงเรียน</h2>
                                               รหัสโรงเรียน: {{$schools->code}}<br>
                                               ชื่อโรงเรียน: {{$schools->name}}<br>
                                               เบอร์โทรศัพท์: {{$schools->tel}}<br>
                                               ที่อยู่:  {{$schools->address}}<br>
                                               จังหวัด: {{$schools->city->city}}<br>
                                               อีเมล: {{$schools->sch_email}}<br>
                                               ความต้องการ: {{$schools->requirement->Sub_req}}
                                              <hr> 
                                               <h2>ข้อมูลส่วนตัว</h2>
                                               ชื่อ-นามสกุล: {{$schools->user->firstname}} {{$schools->user->lastname}} <br>
                                               เบอร์โทรศัพท์: {{$schools->user->phone}} <br>
                                               อีเมล: {{$schools->user->email}} <br>
                                               สถานะ: {{$schools->user->role}} 
                                             
                                   </div>
                             </div>

                            </div> <!-- /col-lg-10 col-lg-offset-1 -->
                     </div><!-- /row -->
                    </div><!-- /ww -->
                </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
<!-- /End show Profile --> 
                 
         </div><!-- /col-md-10 col-md-offset-1 -->
    </div><!-- /row mt -->
</div><!-- /container pt -->
@endsection
