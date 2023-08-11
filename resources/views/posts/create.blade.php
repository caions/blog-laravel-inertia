@extends('layouts.app')
@section('content')
<div class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4">
  <div class="mt-10 text-2xl text-center ">Create Post</div>
  <form method="POST" action={{ route('posts.store') }} class="">
    @csrf
    <div class="mb-4">
      <label class="block text-sm font-bold mb-2" for="title">
        Title
      </label>
      <input id="title" name="title" type="text" placeholder="title" maxlength="50" class="shadow appearance-none border rounded w-full py-2 px-3 
      leading-tight focus:outline-none focus:shadow-outline
      @error('title') border-red-500 @enderror">
      @error('title')
      <div class="text-red-600">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-6">
      <label class="block text-sm font-bold mb-2" for="content">
        Content
      </label>
      <textarea name="content" class="shadow peer block min-h-[auto] w-full rounded bg-transparent px-3 
      py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 
      ease-linear focus:placeholder:opacity-100 border
      data-[te-input-state-active]:placeholder:opacity-100 
      motion-reduce:transition-none @error('content') border-red-500 @enderror" id="content" rows="3"
        placeholder="Content"></textarea>
      @error('content')
      <div class="text-red-600">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-4">
      <label class="block text-sm font-bold mb-2" for="slug">
        Slug
      </label>
      <input name="slug" id="slug" type="text" placeholder="example-slug" maxlength="60"
        class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline @error('slug') border-red-500 @enderror">
      @error('slug')
      <div class="text-red-600">{{ $message }}</div>
      @enderror
    </div>
    <div class="flex items-center justify-between">
      <button type="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ">
        Publicar
      </button>
    </div>
  </form>
</div>
@endsection