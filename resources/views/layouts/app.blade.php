<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>@yield('title') - Products App</title>
</head>
<body class="bg-gray-300 text-gray-800">

    <nav class="h-16 flex justify-end py-4 px-16">
        <a href="{{ route('products.index') }}" class="border border-blue-500
        rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Products</a>
        <a href="{{ route('products.create') }}" class="border border-blue-500
        rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Create</a>
    </nav>
    <main class="p-16 flex justify-center ">
      @yield('content')
    </main>


</body>
</html>
