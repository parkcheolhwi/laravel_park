@extends('common.layout')

@section("title", "Community List")

@section("content")
    <div class="flex">
        <h4 class="text-2xl flex-1">Community List</h4>
        <a href="/communitys/create">
            <button class="flex-initial bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
        </a>
    </div>
    <table class="table-auto ">
        <thead>
          <tr>
            <th class="w-1/12 px-4 py-2 text-center">No</th>
            <th class="w-auto px-4 py-2 text-center"><a href="/">Title</a></th>
            <th class="w-1/12 px-4 py-2 text-center">Author</th>
            <th class="w-1/12 px-4 py-2 text-center">views</th>
            <th class="w-2/12 px-4 py-2 text-center">Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border px-4 py-2 text-center">1</td>
            <td class="border px-4 py-2">Title1</td>
            <td class="border px-4 py-2 text-center">user1</td>
            <td class="border px-4 py-2 text-center">10</td>
            <td class="border px-4 py-2 text-center">2020-09-23</td>
          </tr>
          <tr>
            <td class="border px-4 py-2 text-center">2</td>
            <td class="border px-4 py-2">Title2</td>
            <td class="border px-4 py-2 text-center">user2</td>
            <td class="border px-4 py-2 text-center">1</td>
            <td class="border px-4 py-2 text-center">2020-09-23</td>
          </tr>
          <tr>
            <td class="border px-4 py-2 text-center">3</td>
            <td class="border px-4 py-2">Title3</td>
            <td class="border px-4 py-2 text-center">user1</td>
            <td class="border px-4 py-2 text-center">3</td>
            <td class="border px-4 py-2 text-center">2020-09-23</td>
          </tr>
        </tbody>
    </table>
@endsection
