@extends('template')
@section('content')
    <h1>Listado</h1>
    @foreach($ej as $po)
        <p>
            <strong>{{$po->id}} </strong>
            <a href="{{route('post',$po->slug)}}">
                {{$po->title}}
            </a>
            <br>
            <span>{{$po->user->name}}</span>
        </p>
    @endforeach
    {{$ej->links()}}
@endsection
