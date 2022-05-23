Edit comments

<br>
<br>
<form action="/comments/edit/{{ $comment->id }}" method="post">
  @csrf

Title: <input type="text" name="title" value="{{ $comment->title }}"><br>
Body: <input type="text" name="body" value="{{ $comment->body }}"><br>
<input type="submit">
</form>