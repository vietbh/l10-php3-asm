@extends('layout.app')

@section('styles-index')
    <style>
        .a-title{
            text-decoration:none; 
            color:black; 
        }
        .a-title:hover{
            color: azure;
        }
    </style>
@endsection


@section('content')
<div class="container">
    <div class="card mb-2">
        <div class="card-header py-3  bg-secondary ">
            <h1 class="text-white text-center">Trang tin chính</h1>
        </div>
    </div>
</div>
    @forelse ($tins as $item)
 
        <div class="container">
            <div class="card mb-2">
                <div class="card-header py-3 bg-warning ">
                    <h3><a class="a-title"  href="{{ route('tin.single',['id' => $item->id]) }}">  <h4>{{ $item->title }}</h4> </a></h3>
                </div>
                <div class="card-body">
                    <p>{{ $item->content }}</p>
                </div>
                <div class="card-footer bg-success text-white pb-0">
                    <p>Ngày đăng: {{ $item->created_at }}</p>
                </div>
            </div>
        </div>
    @empty
        <h1>Tin chưa cập nhật</h1>
    @endforelse
@endsection
