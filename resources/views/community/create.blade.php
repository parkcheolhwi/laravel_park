@extends('common.layout')

@section("title", "Community Create")

@section("content")
    <div class="flex">
        <h4 class="text-2xl flex-1">Community Create</h4>
        <a href="/communitys/create">
            <button class="flex-initial bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
        </a>
    </div>

@endsection
