@extends('layouts.app')
<div class="h-auto p-3">
    <div class="text-2xl">Posts</div>
    @forelse ($posts as $post)
    <div class="text-blue-500 flex flex-col mt-4">
        <a href={{$post->slug}}>{{ $post->title }}</a>
    </div>
    @empty
    <p>No posts</p>
    @endforelse
</div>