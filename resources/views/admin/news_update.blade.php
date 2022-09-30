<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update database</title>
</head>

<body>
  <h1>{{ $pageName}}</h1>
  <form method="POST" action="/admin/news/update/{{ $news->id }}">
    @method('PATCH')
    @csrf
    <input type="hidden" name="id" value="{{ $news->id }}">
    <p>
      <label for="title">Title</label>
      <input type="text" name="title" value="{{ $news->title }}">
    </p>
    <p>
      <label for="email">Email</label>
      <input type="text" name="email" value="{{ $news->email }}">
    </p>
    <p>
      <label for="descriptiom">descriptiom</label>
      <textarea rows="5" cols="58" name="description">{{ $news->description }}</textarea>
    </p>
    <p>
      <button type="submit">Submit</button>
    </p>
  </form>
</body>

</html>