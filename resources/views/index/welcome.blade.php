@extends('layouts.default')
@section('content')
<style>
    .title{
        align:center;
    }
</style>

        <div class="container">
            <div class="content">
                <div class="title">Welcome to our news site!</div>
                <a href='{{route('news.list')}}' >see more</a>
            </div>
        </div>

@endsection