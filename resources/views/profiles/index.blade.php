@extends('stanley.index')

@section('content')
<div class="container pt">
    <div class="row mt">
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Volunteer Profile</li>
            </ol>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="ww">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 ">
                                <div class="row">
                                    <!--Profile image-->
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                              <div class="thumbnail">
                                                <img src="{{ url('assets/img/port05.jpg') }}" alt="..."> <hr>
                                                  <div class="centered">
                                                            <p> {{ Auth::user()->firstname }}</p><h5>({{ Auth::user()->role }})</h5>      
                                                                      
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                </div> <!-- /row -->
                            </div> <!-- /col-lg-10 col-lg-offset-1 -->
                     </div><!-- /row -->
                    </div><!-- /ww -->
                </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
<!-- /End show Profile --> 

                  <div class="panel panel-default">
                  <div class="panel-body">
                           <div id="ww">
                           <div class="row">
                                   <div class="col-lg-10 col-lg-offset-1 ">
                                   <div class="row">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#matching" aria-controls="matching" role="tab" data-toggle="tab">จับคู่</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#history" aria-controls="history" role="tab" data-toggle="tab">ดูประวัติการจับคู่</a>
                                                </li>
                                            </ul>

                                   <div id="ww2">
                                   <div class="row">
                                   <div class="ccol-lg-12 centered">
                                            <!-- Tab panes -->
                                              <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="matching">จับคู่...</div>
                                                <div role="tabpanel" class="tab-pane" id="history">ดูประวัติการจับคู่...</div>
                                              </div>
                                   </div><!-- /col-lg-12 centered -->
                                   </div><!-- /row -->
                                   </div><!-- /ww2 -->
                                   
                                   </div> <!-- /row -->
                                   </div> <!-- /col-lg-10 col-lg-offset-1 -->
                                   
                           </div><!-- /row -->
                          </div><!-- /ww -->
                  </div><!-- /panel-body -->
                  </div><!-- /panel panel-default -->
                 
         </div><!-- /col-md-10 col-md-offset-1 -->
    </div><!-- /row mt -->
</div><!-- /container pt -->
@endsection
