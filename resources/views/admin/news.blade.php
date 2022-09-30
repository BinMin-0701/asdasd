<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hiển thị nội dung news.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<style>
  .add {
    padding-top: 24px;
  }
</style>

<body>
  <div class="container">
    <h1>{{ $pageName }}</h1>
    <table border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Email</th>
          <th>Mô tả</th>
          <th>Tools</th>
        </tr>
      </thead>
      <tbody>
        @foreach($news as $row)
        <tr>
          <td>{{$row->id}}</td>
          <td><a href="/admin/news/{{$row->id}}">{{$row->title}}</a></td>
          <td>{{$row->email}}</td>
          <td>{{$row->description}}</td>
          <td><a href="/admin/news/edit/{{$row->id}}">Edit</a> | Delete</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="add">
      <a href="/admin/news/create" class="btn-success btn">Thêm mới</a>
    </div>
  </div>
</body>

</html>