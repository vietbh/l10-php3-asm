@extends('layout.app')


@section('content')
<div class="container">
    <div class="card mb-2">
        <div class="card-header py-3 bg-secondary ">
            <h1 class="text-white text-center">Tin số {{$tin->id}}</h1>
        </div>
    </div>
</div>
<div class="container-fluid"> 
        <div class="px-4 py-5 bg-dark text-white rounded-top">
            <h2 class="text-warning">{{$tin->title}}</h2>
            <p>{{$tin->content}}</p>
        </div>
        <div class="px-4 py-4 bg-secondary text-white">
            <p>{{$tin->long_description}} </p>
        </div>

        <div class="py-4 px-4  text-info rounded">
            <p>Ngày đăng:{{$tin->created_at}}</p>
        </div>
</div>
@endsection

