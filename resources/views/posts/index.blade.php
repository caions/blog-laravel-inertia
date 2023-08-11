@extends('layouts.app')
@section('content')
<div class="h-auto p-3">
    <div class="text-2xl text-center">Posts</div>
    <a href="/posts/create"
    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ">
    Novo Post
    </a>
    @forelse ($posts as $post)
    <div class="flex flex-col mt-4">
        <div>
            <a href="posts/{{$post->slug}}">{{ $post->title }}</a>
            <a href="posts/{{$post->slug}}/edit">Editar</a>
        </div>
    </div>
    @empty
    <p>No posts</p>
    @endforelse
</div>
@endsection