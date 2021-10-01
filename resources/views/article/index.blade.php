@extends('layouts.app')

@section('header', 'Articles')

@section('content')
  <div class="max-w-7xl mx-auto">
    <a class="block mb-6 underline" href="{{ route('articles.create') }}">Create article</a>

    @if ($articles)
      <table class="w-full border-collapse bg-white shadow-lg">
        <thead>
        <tr>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">ID</td>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Title</td>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Slug</td>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Description</td>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">OG title</td>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">OG description</td>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">User ID</td>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Content</td>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Show</td>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Edit</td>
          <td class="border border-gray-400 p-2 font-semibold bg-indigo-50 text-center">Delete</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($articles as $article)
          <tr>
            <td class="border border-gray-400 p-2 text-center">{{ $article->id }}</td>
            <td class="border border-gray-400 p-2 text-center">{{ $article->title }}</td>
            <td class="border border-gray-400 p-2 text-center">{{ $article->slug }}</td>
            <td class="border border-gray-400 p-2 text-center">{{ $article->description }}</td>
            <td class="border border-gray-400 p-2 text-center">{{ $article->og_title }}</td>
            <td class="border border-gray-400 p-2 text-center">{{ $article->og_description }}</td>
            <td class="border border-gray-400 p-2 text-center">{{ $article->user_id }}</td>
            <td class="border border-gray-400 p-2 text-center">{{ $article->content }}</td>
            <td class="border border-gray-400 p-2 text-center"><a href="{{ route('articles.show', $article->slug) }}">Show</a></td>
            <td class="border border-gray-400 p-2 text-center"><a href="{{ route('articles.edit', $article->id) }}">Edit</a></td>
            <td class="border border-gray-400 p-2 text-center">
              <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure to delete this item?')">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    @endif
  </div>
@endsection
