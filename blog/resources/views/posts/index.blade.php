@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Category</th>
                <th scope="col">Content</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->category->name}}</td>
                <td>{{$post->content}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
