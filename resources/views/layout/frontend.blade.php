<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
  <div class="bg-white">
    <header>
      <div class="container px-6 py-3 mx-auto">
        <div class="flex items-center justify-between">
          <div class="flex items-center justify-end w-full">
            <button" class="mx-4 text-gray-600 focus:outline-none sm:mx-0"> </button>
          </div>
        </div>
        <nav class="p-6 mt-4 text-white bg-black sm:flex sm:justify-center sm:items-center">
          <div class="flex flex-col sm:flex-row">
            <a class="mt-3 hover:underline sm:mx-3 sm:mt-0 nav-link" href="/">Home</a>
            <a class="mt-3 hover:underline sm:mx-3 sm:mt-0 nav-link" href="{{ route('products.list')}}">Shop</a>
            <a href="{{ route('cart.list') }}" class="flex items-center nav-link d-flex align-items-end">
              <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
              {{ Cart::getTotalQuantity()}}
            </a>

          </div>
        </nav>
      </div>
    </header>

    <main class="my-8">
      @yield('content')
    </main>

  </div>
</body>

</html>