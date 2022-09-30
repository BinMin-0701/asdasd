<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<style>
  .product {
    border: 1px solid #404040;
    border-radius: 25px;
    box-sizing: border-box;
  }
</style>

<body>
  @extends('layout.frontend')
  @section('content')
  <div class="container px-6 mx-auto">
    <h3 class="text-2xl font-medium text-gray-700">Product List</h3>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
      @foreach ($products as $product)
      <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
        <img src="{{ url($product->image) }}" alt="" class="w-full max-h-60">
        <div class="flex items-end justify-end w-full bg-cover">

        </div>
        <div class="px-5 py-3">
          <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
          <span class="mt-2 text-gray-500">${{ $product->price }}</span>
          <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $product->id }}" name="id">
            <input type="hidden" value="{{ $product->name }}" name="name">
            <input type="hidden" value="{{ $product->price }}" name="price">
            <input type="hidden" value="{{ $product->image }}" name="image">
            <input type="hidden" value="1" name="quantity">
            <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
          </form>
        </div>

      </div>
      @endforeach
    </div>
  </div>
  @endsection
</body>

</html>