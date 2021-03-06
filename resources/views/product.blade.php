@extends('stanley.index')

@section('content')

    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.1.custom.min.js"></script>
    <script type="text/javascript" src="js/general.js"></script>
    <script type="text/javascript" src="js/jsParser.js"></script>

  <div class="container pt">
    <div class="row mt ">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading"><center><h3>ค้นหาโรงเรียน</center></h3></div>
                <div class="panel-body">

                       <?= Form::open(array('url' => '/search','method'=>'post')) ?>

                         <div class='col-xs-5'>
                             <div class="form-group">
                                <?= Form::label('City_ID', 'จังหวัด'); ?>
                                <?= Form::select('City_ID', App\City::lists('city', 'id'), null,
                                         ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกจังหวัด...']); ?>
                             </div>
                            </div>

                            <div class='col-xs-5'>
                              <div class="form-group">
                                <?= Form::label('Sub_ID', 'ความต้องการ'); ?>
                                <?= Form::select('Sub_ID', App\Requirement::lists('Sub_req', 'id'), null,
                                          ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกความต้องการ...']); ?>
                              </div>
                            </div>
                        <br>
                           <center><div class='col-xs-2'>
                               <div class="form-group">
                                 <button type="submit" class="btn btn-primary " id="btnSearch">
                                 <span class="glyphicon glyphicon-search"></span> ค้นหา</button>
                               </div>
                           </div></center>

                     <?= Form::close() ?>
                </div>
            </div>
        </div>

        @if(isset($schools))
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 col-md-offset-2">

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <center><h3>ผลลัพธ์จากการค้นหา</h3></center>
                                <hr>
                                    <div id="ww">
                                    <div class="row">
                                        <div class="col-lg-8 col-lg-offset-2 ">
                                            <div class="row">
                                                @foreach($schools as $school)
                                                    <div class="list-group">

                                                        <a class="list-group-item ">
                                                          <div class="w3-container">
                                                            <p><img src="/images/{{$school->image_name}}" width="50px" height="50px"> <b>โรงเรียน:</b> {{$school->name}}</p>
                                                            <hr>
                                                            <p><b>จังหวัด:</b> <?= App\City::where('id',$school->city_id)->get()[0]->city; ?><br>
                                                                <b>ความต้องการ:</b> <?= App\Requirement::where('id',$school->require_id)->get()[0]->Sub_req; ?><br>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach


                                            </div> <!-- /row -->
                                        </div> <!-- /col-lg-10 col-lg-offset-1 -->

                                    </div><!-- /row -->
                                    </div><!-- /ww -->

                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->


                    </div>
                </div>
            </div>
        @endif

        </div>
    </div>
  </div>
        

@endsection

