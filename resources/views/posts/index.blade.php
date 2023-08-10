@extends('layouts.app')
@php
    $isActive = false;
    $hasError = true;
@endphp
 
<span @class([
    'p-4',
    'font-bold' => $isActive,
    'text-yellow-500' => !$isActive,
    'bg-red' => $hasError,
])>legal</span>
 
<span class="p-40 text-green-900 bg-red">Olá</span>