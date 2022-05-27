

<h1>{{ $post->title}}</h1>
<p>{{ $post->body }}</p>

@foreach($post->postcomments as $postcomment)
  <div class="postcomment">
    <h4>{{ $postcomment->author }}</h4>
    <p>{{ $postcomment->body }}</p>
  </div>
@endforeach

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
  
<br>

<form action="/postcomments/store" method="POST">
  @csrf

  <div>
    <input type="text" placeholder="Author name" name="author">
  </div>

  <div>
    <textarea name="body" placeholder="Post comment body "></textarea>
  </div>

  <input type="hidden" value="{{ $post->id }}" name="commentable_id">
  <input type="hidden" value="{{ get_class($post) }}" name="commentable_type">
  <input type="submit">
</form>

<a href="{{ route('posts.index') }}">Back to index</a>