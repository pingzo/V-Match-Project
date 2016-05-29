@extends('stanley.index')

@section('content')
<div class="container pt">
<div class="row mt">

            
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">School Profile</li>
                
            </ol>

         @if (count($schools) > 0)
            <div class="panel panel-default">
              <div class="panel-body">

                    <div id="ww">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 lefted">

                               

                                <div class="row">
		<div class="col-xs-6 col-md-3">
		<a href="{{ asset('images/'.$schools->image) }}">
			<img src="{{'images/resize/'.$schools->image}}" alt="Stanley">
		</a>
		</div> 
		</div>

                            </div><!-- /col-lg-8 -->
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

                            <!-- Tab panes 
                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="matching">จับคู่...</div>
                                <div role="tabpanel" class="tab-pane" id="history">ดูประวัติการจับคู่...</div>
                                <div role="tabpanel" class="tab-pane" id="messages">Messages...</div>
                                
                              </div>-->
                            
                            <table class="table table-striped">
                        <tr>
                            <th>รหัส</th> 
                            <th>ชื่อโรงเรียน</th> 
                            <th>รหัสโรงเรียน</th> 
                            <th>ที่อยู่</th> 
                            <th>อีเมล</th>
                            <th>เบอร์โทร</th>
                            <th>จังหวัด</th>
                            <th>ความต้องการ</th>
                        </tr>
                        @foreach ($schools as $school)
                        <tr>
                                <td>{{ $school->id }}</td>
                                <td>{{ $school->name }}</td>
                                <td>{{ $school->code }}</td>
                                <td>{{ $school->taddress }} </td>
                                <td>{{ $school->sch_email }} </td>
                                <td>{{ $school->tel }} </td>
                                <td>{{ $school->city_id }} </td>
                                <td>{{ $school->require_id }} </td>
                                
<!--                                <td><a href="{{ url('/books/edit', $book->id)}}"><i class="fa fa-pencil"></i></a> </td>
                                <td><a href="{{ url('/books/destroy', $book->id)}}"><i class="fa fa-trash"></i></a> </td>-->
                         </tr>       
                        @endforeach
                        
                                               
                    </table>


                           
                            </div><!-- /col-lg-8 -->
                        </div><!-- /row -->
                    </div><!-- /ww -->



                </div>
            </div>
         @endif
         
        </div>
    </div>
</div>
@endsection
