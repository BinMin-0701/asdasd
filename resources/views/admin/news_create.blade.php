<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Them data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <form method="post" action="/admin/news/store">
      @csrf
      <p>
        <label for="title">Tiêu đề: </label>
        <input type="text" name="title" value="">
      </p>
      <p>
        <label for="price">Giá: </label>
        <input type="text" name="price" value="">
      </p>
      <p>
        <label for="image">image: </label>
        <input type="text" name="image" value="">
      </p>
      <p>
        <label for="description">Nội dung</label>
        <textarea rows="10" cols="20" name="description"></textarea>
      </p>
      <p>
        <button type="submit" class="btn btn-success">Submit</button>
      </p>
      <div>
        <a href="/admin/news" class="btn btn-success">Xem danh sách</a>
      </div>
    </form>
  </div>
</body>

</html>