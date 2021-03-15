@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('posts.store')}}" class="mt-5 container">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea name="desc" class="form-control"></textarea>
    </div>
    <div class="mb-3 ">
      <label for="postcreator" class="form-label">post creator</label>
      <select name="postname" id="cars" class="form-control">
        @foreach ($users as $user)
            <option>{{$user->name}}</option>
        @endforeach
 
        </select>
        </div>
    <button type="submit" class="btn btn-success">Create</button>
  </form>

@endsection