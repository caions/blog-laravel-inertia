@extends('layouts.app')
@section('content')
<div class="h-auto p-3">
    <div class="text-2xl text-center">Posts</div>
    <a href={{route('posts.create')}}
    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ">
    Novo Post
    </a>
    @forelse ($posts as $post)
    <div class="flex flex-col mt-4">
        <div>
            {{ $post->title }}
            <div class="flex gap-2">
                <a class="text-blue-600" href={{ route('posts.show', ['post' => $post->slug]) }}>Visualizar</a>
                <a class="text-green-600" href={{ route('posts.edit', ['post' => $post->slug]) }}>Editar</a>
                <form method="POST" action="{{ route('posts.destroy', ['post' => $post]) }}">
                @csrf
                @method('DELETE')
                    <button class="text-red-600">Excluir</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <p class="mt-5">No posts</p>
    @endforelse
</div>
@endsection