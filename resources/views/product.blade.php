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
                <div class="panel-heading">Search</div>
                <div class="panel-body">

                                           
                       <?= Form::open(array('url' => '/search','method'=>'post')) ?>

                         <div class='col-xs-4'>
                        <div class="form-group">
                            <?= Form::label('City_ID', 'จังหวัด'); ?>
                            <?= Form::select('City_ID', App\City::lists('city', 'id'), null,  ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกจังหวัด...']); ?>
                            </div>
                            </div>

                            <div class='col-xs-5'>
                              <div class="form-group">
                            <?= Form::label('Sub_ID', 'ความต้องการ'); ?>
                            <?= Form::select('Sub_ID', App\Requirement::lists('Sub_req', 'id'), null,  ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกความต้องการ...']); ?>
                        </div>
                    </div>

                     <div class="form-group">
                     <div class="col-lg-10 col-lg-offset-2">
                       <!--   <button type="reset" class="btn btn-default">Cancel</button> -->
                         <button type="submit" class="btn btn-primary" id="btnSearch">
                         <span class="glyphicon glyphicon-search"></span>ค้นหา</button>
                     </div>
                     </div>

                     <?= Form::close() ?>


                </div>
            </div>
        </div>
        
        <div class="col-md-8 col-md-offset-2">
            @if(isset($schools))
                <table class="table table-bordered">
                    <thead>
                        <tr class="success">
                            <th>ชื่อโรงเรียน</th>
                            <th>จังหวัด</th>
                            <th>ประเภทความต้องการ</th>
                            <th>ความต้องการ</th>
                            <th>เบอร์โทร</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach($schools as $school)
                            <tr>
                                <td>{{$school->name}}</td>
                                <td><?= App\City::where('id',$school->city_id)->get()[0]->city; ?></td>
                                <td><?= App\Requirement::where('id',$school->require_id)->get()[0]->Req; ?></td>
                                <td><?= App\Requirement::where('id',$school->require_id)->get()[0]->Sub_req; ?></td>
                                <td>{{$school->tel}}</td>
                                <td>{{$school->sch_email}}</td>
                            </tr>
                        @endforeach   
                    </tbody>

                </table>
             @endif
        </div>
    </div>
</div>
        

@endsection

