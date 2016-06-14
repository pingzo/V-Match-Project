@extends('stanley.index')

@section('content')

<div class="container pt">
    <div class="row mt">
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li class="active">School Profile</li>
            </ol>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="ww">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 ">   
                                
                                  <!--Admin Mark Star-->
                                  <div class="centered">          
                                    @if($schools->star_mark == 1)                                    
                                    <button type="button" class="btn btn-defalt btn-xs" aria-label="Left Align" disabled="disabled">
                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                        ยังไม่ได้รับการยืนยันจากผู้ดูแลระบบ
                                   </button>
                                    @else
                                   <button type="button" class="btn btn-success btn-xs" aria-label="Left Align" disabled="disabled">
                                           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                            ได้รับการยืนยันจากผู้ดูแลระบบ
                                   </button>
                                   @endif                                   
                                  </div> <br>
                                   
                                <div class="row">
                                         <div class="col-xs-4">
                                           <div class="thumbnail">
                                               <style>
                                                   .image{
                                                       max-width: 200px;
                                                   }
                                               </style>
                                               <div class="centered">
                                                   <p> <img class="image" src="/images/{{$schools->image_name}}" /></p>
                                               </div>
                                                  <hr>
                                                  <div class="centered">
                                                          <p>โรงเรียน: {{$schools->name}}</p>                                                                         
                                                  </div>
                                            </div>          
                                         </div>
                                   <div class="col-xs-8">
                                            <div class="panel panel-default">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading"><h3>ข้อมูลโรงเรียน</h3></div>
                                            <!-- List group -->
                                            <ul class="list-group">
                                              <li class="list-group-item">
                                                  <b>รหัสโรงเรียน 10 หลัก:</b> 
                                                  {{$schools->code}}<br></li>
                                              <li class="list-group-item">
                                                  <b>ชื่อโรงเรียน:</b> 
                                                  {{$schools->name}}</li>
                                              <li class="list-group-item">
                                                  <b>เบอร์โทรศัพท์:</b> 
                                                  {{$schools->tel}}</li>
                                              <li class="list-group-item">
                                                  <b>ที่อยู่:</b>  
                                                  {{$schools->address}}</li>
                                              <li class="list-group-item"><b>จังหวัด:</b> 
                                                  {{$schools->city->city}}</li>
                                              <li class="list-group-item">
                                                  <b>อีเมล:</b> 
                                                  {{$schools->sch_email}}</li>
                                              <li class="list-group-item">
                                                  <b>ความต้องการหลัก:</b>
                                                  {{$schools->requirement->Sub_req}}</li>
                                                <li class="list-group-item">
                                                    <b>ความต้องการอื่นๆ:</b>
                                                    {{$schools->require_etc}}</li>
                                            </ul>
                                          </div>
                                             
                                               @if ( Auth::user()->role =='school')
                                               <hr>
                                               <p>
                                                    <a href="{{ url('/schools/'. Auth::user()->id.'/edit') }}" 
                                                        type="button" class="btn btn-primary btn-sm">
                                                        <span class="glyphicon glyphicon-edit"></span> แก้ไขข้อมูลโรงเรียน</a>
                                              </p>
                                            @endif
                                             
                                   </div>
                             </div>
                                  
                             <hr>
                                <h4>รูปภาพโรงเรียน</h4>
                          <div class="panel panel-default">
                                    <div class="panel-body">
                                                        <div id="ww2">
                                                            <div class="row">
                                                                <div class="ccol-lg-15 centered">
                                                                    <!-- Tab panes -->
                                                                    <div class="tab-content">
                                                                        <div role="tabpanel" class="tab-pane active" id="matching">
                                                                        @foreach($imageList as $img)
                                                                                        <style>
                                                                                            .image{
                                                                                                max-width: 200px;
                                                                                            }
                                                                                        </style>
                                                                                        <div class="col-md-4">
                                                                                            <img class="image" src="/images/{{$img->name}}" />
                                                                                        </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /col-lg-12 centered -->
                                                            </div><!-- /row -->
                                                        </div><!-- /ww2 -->
                                 <center>  {{ $imageList->links() }} </center>             
                                    </div><!-- /panel-body -->
                                </div><!-- /panel panel-default -->

                                @if ( Auth::user()->role =='school')
                                <p>
                                    <a href="{{ url('/schools/'. Auth::user()->id. '/upload') }}"
                                       type="button" class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-picture"></span> จัดการรูปภาพ</a>
                                </p>
                                @endif
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
