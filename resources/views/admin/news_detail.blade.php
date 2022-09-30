<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chi tiết</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<style>
  .button {
    padding-top: 24px;
  }
</style>

<body>
  <div class="container">
    <h1>Trang chi tiết thông tin</h1>
    <h2>Tiêu đề: {{ $news->title }}</h2>
    <p>Email: {{ $news->email }}</p>
    <div>Mô tả:
      {{!! $des !!}}
    </div>
    <div class="button">
      <a href="/admin/news" class="btn btn-success">Trở lại</a>
    </div>
  </div>
</body>

</html>