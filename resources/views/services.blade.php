@extends('layout.base')

@section('content')

@foreach ($adminList as $data)
<h1>List Nama</h1>
<p> {{ $data->name }}</p>
@endforeach

    
@endsection