@extends('layouts.app')
@section('content')
<div class=" h-auto p-3">
    <div class="text-center mb-3">{{$post->title}}</div>
    <div>{{$post->content}}</div>
</div>
@endsection