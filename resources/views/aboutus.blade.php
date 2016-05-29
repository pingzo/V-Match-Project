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
                           <img src="{{ url('assets/img/rz-icon3.png') }}" alt="Stanley">
                           <h1>ABOUT V-MATCH !</h1>

                           <p>Hello everybody. I'm Stanley, a free handsome bootstrap theme coded by BlackTie.co. 
                               A really simple theme for those wanting to showcase their work with a cute & clean style.
                           </p>

                           <p>Please, consider to register to <a href="http://eepurl.com/IcgkX">our newsletter</a> 
                               to be updated with our latest themes and freebies. 
                               Like always, you can use this theme in any project freely. 
                               Share it with your friends.
                           </p>
                           
                           <p>
                           <a href="{{ url('/preregister') }}">
                                <button type="button" class="btn btn-info btn-lg" >Join Us !</button>
                           </a>                  
                          </p>
                  </div><!-- /col-lg-8 -->
	</div><!-- /row -->
	</div><!-- /ww -->
                  </div> <!-- /panel-body-->

            </div>
        </div>
    </div>
</div>

@endsection
