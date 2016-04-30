
@extends('stanley.index')

@section('content')

    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.1.custom.min.js"></script>
    <script type="text/javascript" src="js/general.js"></script>
    <script type="text/javascript" src="js/jsParser.js"></script>

	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Search</div>
                <div class="panel-body">
                                           
                       <?= Form::open(array('url' => 'product')) ?>

                            <div class='col-xs-4'>
                                <div class="form-group">
                                    <?= Form::label('City_ID', 'จังหวัด'); ?>
                                    <?= Form::select('City_ID', App\City::lists('City', 'City_ID'), null,  ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกจังหวัด...']); ?>
                                </div>
                            </div>

                            </div>
                        </div>

                       <?= Form::close() ?>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

