<table>

  <thead>
    <th>ID</th>
    <th>Title</th>
    <th>Text</th>
    <th>Author Name</th>
    <th>Actions</th>
  </thead>

  <tbody>
    @foreach($comments as $comment)
    <tr>
      <td>{{ $comment->id }}</td>
      <td>{{ $comment->title }}</td>
      <td>{{ $comment->body }}</td>
      <td>{{ $comment->author_name }}</td>
      <td>
        <a href="{{ route('comments.create') }}">Create</a>
        <a href="{{ route('comments.show', ['comment' =>$comment->id]) }}">Show</a>
        <a href="{{ route('comments.edit', ['comment' => $comment->id]) }}">Edit</a>
        <a href="{{ route('comments.delete', ['comment' => $comment->id]) }}">Delete</a>
      </td>
    </tr>
    @endforeach 
  </tbody>

</table>