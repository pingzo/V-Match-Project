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
                                    <div class="col-xs-6 col-md-4">
                                        <a href="#" class="thumbnail">
                                            <img src="assets/img/user.png" alt="Stanley">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-10 col-lg-offset-1 ">
                                <div class="row">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#matching" aria-controls="matching" role="tab" data-toggle="tab">ข้อมูลส่วนตัว</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#history" aria-controls="history" role="tab" data-toggle="tab">ข้อมูลกลุ่มอาสา</a>
                                    </li>
                                </ul>

                                <div id="ww2">
                                    <div class="row">
                                        <div class="col-lg-10 col-lg-offset-1">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="matching">
                                                <div class="col-lg-8">
                                                    <dl>
                                                        <dt>ชื่อ-นามสกุล:</dt>
                                                            <dd>พุทธิพัทธ์ มีอ่วม</dd>
                                                        <dt>เบอร์โทรศัพท์:</dt>
                                                            <dd>0835679350</dd>
                                                        <dt>e-mail:</dt>
                                                            <dd>pp.puttipat@gmail.com</dd>
                                                    </dl>
                                                </div><!-- /col-lg-8 -->
                                            </div>

                                                 <div role="tabpanel" class="tab-pane" id="history">ข้อมูลกลุ่มอาสา...
                                                 </div>
                                        </div><!-- /tab-content -->

                                    </div><!-- /row-->
                                </div><!-- /col-lg-10 col-lg-offset-1 lefted -->

                                </div><!-- /row -->
                            </div><!-- /ww2 -->


                        </div><!-- /row -->
                    </div><!-- /ww -->

                    <hr>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#matching" aria-controls="matching" role="tab" data-toggle="tab">จับคู่</a>
                        </li>
                        <li role="presentation">
                            <a href="#history" aria-controls="history" role="tab" data-toggle="tab">ดูประวัติการจับคู่</a>
                        </li>
                        <li role="presentation">
                            <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a>
                        </li>
                    </ul>

                    <div id="ww2">
                        <div class="row">
                            <div class="ccol-lg-12 centered">
                            <!-- Tab panes -->
                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="matching">จับคู่...</div>
                                <div role="tabpanel" class="tab-pane" id="history">ดูประวัติการจับคู่...</div>
                                <div role="tabpanel" class="tab-pane" id="messages">Messages...</div>
                              </div>
                           </div><!-- /col-lg-8 -->
                        </div><!-- /row -->
                    </div><!-- /ww -->

                </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
            </div><!-- /col-md-10 col-md-offset-1 -->
        </div><!-- /col-md-10 col-md-offset-1 -->
    </div><!-- /row mt -->
</div><!-- /container pt -->
@endsection
