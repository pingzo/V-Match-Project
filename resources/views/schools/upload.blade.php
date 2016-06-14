@extends('stanley.index')

@section('stylesheet')
    <!-- เรียกใช้ css ในการจัดการ layout ต่าง ๆ เฉพาะหน้านี้ -->
    <link href="{{asset('/assets/css/upload.css')}}" rel="stylesheet" type="text/css"/>

@stop

@section('content')

    <div class="container pt">
        <div class="row mt">
            <div class="col-md-10 col-md-offset-1">

                <ol class="breadcrumb">
                    <li><a href="{{ url('/home') }}">หน้าหลัก</a></li>
                    <li class="active">อัพโหลดรูปโรงเรียน</li>
                </ol>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="ww">
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1 ">
                                    <div class="row">

                                        <div class="text-content">
                                            <div class="span7 offset1">
                                                @if(Session::has('success'))
                                                    <div class="alert-box success">
                                                        <h2>{!! Session::get('success') !!}</h2>
                                                    </div>
                                                @endif
                                                {!! Form::open(array('url'=>'/uploads/'.$schools->id.'/schools','method'=>'POST', 'files'=>true, 'enctype'=>'multipart/form-data')) !!}
                                                <div class="control-group">
                                                    <div class="controls">
                                                        {!! Form::file('images[]', array('multiple'=>true)) !!}
                                                        <p class="errors">{!!$errors->first('images')!!}</p>
                                                        @if(Session::has('error'))
                                                            <p class="errors">{!! Session::get('error') !!}</p>
                                                        @endif
                                                        {!! Form::submit('Upload', array('class'=>'btn btn-primary')) !!}
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>

                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <hr>

                        <table class="table table-bordered">
                            <thead>
                            <tr class="success">
                                <th><center>รูป</center></th>
                                <th><center>ชื่อรูป</center></th>
                                <th><center>ลบ</center></th>
                            </tr>
                            </thead>
                            <tbody>

                        @foreach($imageList as $img)
                                    <tr>
                                        <td>
                                            <style>
                                                .image{
                                                    max-width: 100px;
                                                }
                                            </style>
                                            <div class="centered">
                                                <p> <img class="image" src="/images/{{$img->name}}" /></p>
                                            </div>
                                        </td>
                                        <td>{{$img->name}}</td>
                                        <td> <a href="/uploads/{{$img->id}}/delete" type="button" class="btn btn-danger btn-xs" aria-label="Left Align">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>delete</a> <br /></td>


                                    </tr>

                            @endforeach
                            </tbody>
                        </table>
                      <center>  {{ $imageList->links() }} </center>
                     
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection
