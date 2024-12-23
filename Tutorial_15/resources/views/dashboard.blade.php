@extends('layouts.app')

@section('content')
<h1 class="text-center text-danger fw-bold display-1 mt-4">
    Hello, {{ Auth::user()->name }}
</h1>
<p class="text-end text-primary pe-3">
    joined at {{ Auth::user()->created_at }}
</p>
<div class="table-responsive px-3">
    <table class="table table-striped table-bordered">
        <thead class="table-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach(Auth::user()->articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->content }}</td>
                <td>{{ $article->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection