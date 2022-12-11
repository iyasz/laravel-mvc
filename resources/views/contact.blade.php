@extends('layout.base')

@section('content')

<h1>Ini contact Admin</h1>
@foreach ($contactList as $data)
    <p>{{$data->name}} | Admin</p>
@endforeach    

@endsection