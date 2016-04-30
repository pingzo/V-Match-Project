@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <?= link_to('books/create', $title = 'เพิ่มข้อมูล', ['class'=>'btn btn-primary'], $secure = null); ?>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>แสดงข้อมูลหนังสือ</h3> 
                </div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รหัส</th> 
                            <th>ชื่อหนังสือ</th> 
                            <th>ราคา</th> 
                            <th>หมวดหนังสือ</th> 
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($books as $book)
                        <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->typebooks->name }} </td>
                                <td><a href="{{ url('/books/edit', $book->id)}}"><i class="fa fa-pencil"></i></a> </td>
                                <td><a href="{{ url('/books/destroy', $book->id)}}"><i class="fa fa-trash"></i></a> </td>
                         </tr>       
                        @endforeach
                        
                                               
                    </table>
                    
                    <br>
                    <!--pagination-->
                     {!! $books->render()  !!} 
                                  
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
