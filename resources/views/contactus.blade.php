@extends('stanley.index')

@section('content')

<div class="container pt">
    <div class="row mt ">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

             <!-- +++++ Welcome Section +++++ -->
                  <div class="panel-body">
	<div id="ww">
	<div class="row">
                  <div class="col-lg-8 col-lg-offset-2 centered">
                           <img src="assets/img/user.png" alt="Stanley">
	<h3>CONTACT US !</h3>
<hr>
	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
</div>
</div>
	
         <div class="row mt">	
         <div class="col-lg-8 col-lg-offset-2">
	<form role="form">
	<div class="form-group">
                           <input type="name" class="form-control" id="NameInputEmail1" placeholder="Your Name">
	<br>
                  </div>
	<div class="form-group">
	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
	<br>
	</div>
				  <div class="form-group">
				    <input type="email" class="form-control" id="subjectEmail1" placeholder="Subject">
				    <br>
				  </div>
				  <textarea class="form-control" rows="6" placeholder="Enter your text here"></textarea>
				    <br>
				  <button type="submit" class="btn btn-success">SUBMIT</button>
				</form>    			
</div><!-- /col-lg-8 -->
	</div><!-- /row -->
	</div><!-- /ww -->
                  </div> <!-- /panel-body-->

            </div>
        </div>
    </div>
</div>

@endsection
