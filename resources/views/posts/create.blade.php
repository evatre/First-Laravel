

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif 

<form action="/posts/create" method="post">
  @csrf
Title: <input type="text" name="title"><br>
Body: <input type="text" name="body"><br>
<input type="submit">
</form>
