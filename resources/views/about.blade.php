@extends('layout.base')

@section('content')

<h1>About Room</h1>

@foreach ($data as $item)
    <p>{{$item->name}}</p>
@endforeach
    
@endsection