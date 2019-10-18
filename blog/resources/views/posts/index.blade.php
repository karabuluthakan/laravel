@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-responsive table-striped table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{__('system.title')}}</th>
                <th scope="col">{{__('system.slug')}}</th>
                <th scope="col">{{__('system.category')}}</th>
                <th scope="col">{{__('system.content')}}</th>
                <th scope="col">{{__('system.edit')}}</th>
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
                <td> <a href="{{route('post.edit',$post->id)}}"><i class="fas fa-edit"></i></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
