@extends('stanley.index')

@section('content')
        <div class="container pt">
	<div class="row mt">
                        <div class="col-md-10 col-md-offset-1">
                                        <ol class="breadcrumb">
                                            <li><a href="#">Home</a></li>
                                            <li class="active">Manage Members</li>
                                        </ol>
                                <div class="panel panel-default">
                                     <div class="panel-heading">จัดการสมาชิก</div>

                                    <div class="panel-body">
                                         <p>
                                                <button type="button" id="manage-vol-{{ $profiles -> role == 'volunteer' }}" 
                                                        class="btn btn-primary btn-lg">จัดการอาสาสมัคร</button>
                                                <button type="button" id="manage-sch-{{ $profiles -> role == 'school' }}" 
                                                        class="btn btn-success btn-lg">จัดการโรงเรียน</button>
                                        </p>
                                        
                                        @if ( )
                                        <!-- จัดการอาสาสมัคร -->
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                     <tr>
                                                        <th >อาสาสมัคร</th>
                                                        <th >จัดการ</th>
                                                     </tr>                                                       
                                                     @foreach ($profiles as $profile)
                                                     <tr>
                                                        <td>{{ $profile->firstname }}</td>
                                                        <td>
                                                              <a href="{{ url('/admin/destroy/'.$profile->id) }}">
                                                              <i class="fa fatrash"></i>
                                                              </a>
                                                        </td>
                                                     </tr>
                                                      @endforeach
                                            </table>
                                            
                                            @elseif()
                                            <!-- จัดการโรงเรียน -->
                                            <table class="table table-bordered">
                                                     <tr>
                                                        <th >โรงเรียน</th>
                                                        <th >จัดการ</th>
                                                     </tr>
                                                        
                                                     @foreach ($profiles as $profile)
                                                     <tr>
                                                        <td>{{ $profile->firstname }}</td>
                                                        <td>
                                                              <a href="{{ url('/admin/destroy/'.$profile->id) }}">
                                                              <i class="fa fatrash"></i>
                                                              </a>
                                                        </td>
                                                     </tr>
                                                      @endforeach
                                            </table>
                                            @endif
                                      </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
