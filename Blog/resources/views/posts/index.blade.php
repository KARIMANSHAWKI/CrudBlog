@extends('layouts.app')

@section('content')
<div class="text-center">
<a href="{{ route('posts.create') }}" class="btn btn-success  mt-5 " >  Create Post</a>
</div>
    <table class="table  mt-5 container">
        <thead>
          <tr>
            <th scope="col">pagintation in lab2</th>
            <th scope="col">title</th>
            <th scope="col">Description</th>
            <th scope="col">Created By</th>
            <th scope="col">actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($posts as $post)
          <tr>
            <th scope="row">{{$post['id']}}</th>
            <td>{{$post['title']}}</td>
            <td>{{$post['posted_by']}}</td>
            <td>{{$post['created_at']}}</td>
            <td class="col">
                <a href="{{ route('posts.show', [ 'post' => $post['id'] ]) }}" class="btn btn-info">View</a>
                <a href="{{ route('posts.edit', [ 'post' => $post['id'] ]) }}" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection
    