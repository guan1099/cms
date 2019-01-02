{{$page}}</br>
@foreach($list as $v)
    {{$v->book_name}}{{$v->book_author}}{{$v->book_price}}</br>
@endforeach