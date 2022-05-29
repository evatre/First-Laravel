@extends('dashboard')

@section('content')
Edit posts
<br>
<br>


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif 

<form action="/posts/edit/{{ $post->id }}" method="post">
  @csrf

Title: <input type="text" name="title" value="{{ $post->title }}"><br>
Body: <input type="text" name="body" value="{{ $post->body }}"><br>
<input type="submit">
</form>
@endsection