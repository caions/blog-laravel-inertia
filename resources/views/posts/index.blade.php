@extends('layouts.app')
@section('content')

<div class="h-auto p-3">
  <div class="text-2xl text-center">Posts</div>
  <a href={{route('posts.create')}}
    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ">
    Novo Post
  </a>
</div>
<div class="w-[700px] m-auto">
  <table class="w-full border-neutral-700">
    <thead class="font-medium border">
      <tr>
        <th scope="col" class="py-1">Titulo</th>
        <th scope="col" class="py-1">Description</th>
        <th scope="col" class="py-1">Ações</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($posts as $post)
      <tr class="border">
        <td class="px-3 py-1 truncate max-w-[150px]">
          {{ $post->title }}
        </td>
        <td class="max-w-[150px] px-3 py-1 truncate">
          {{ strip_tags($post->body) }}
        </td>
        <td class="justify-center flex gap-3 px-3 py-1 truncate">
          <a class="text-blue-600" href={{ route('posts.show', ['post'=> $post->slug]) }}>Visualizar</a>
          <a class="text-green-600" href={{ route('posts.edit', ['post'=> $post->slug]) }}>Editar</a>
          <form method="POST" action="{{ route('posts.destroy', ['post' => $post]) }}">
            @csrf
            @method('DELETE')
            <button class="text-red-600">Excluir</button>
          </form>
        </td>
      </tr>
      @empty
      <p class="mt-5">No posts</p>
      @endforelse
    </tbody>
  </table>
</div>
@endsection