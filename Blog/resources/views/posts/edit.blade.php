@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('posts.update' ,[ 'post' => $post['id'] ])}}" class="mt-5 container">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control"></textarea>
    </div>
    <div class="mb-3 ">
      <label for="postcreator" class="form-label">post creator</label>
      <select name="postname" id="cars" class="form-control">
        <option value="Ekhlas">Kariman</option>
        <option value="Aya">Islam</option>
        <option value="Asmaa">Heba</option>
 
        </select>
        </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>


@endsection