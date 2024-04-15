<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SketchStore - @yield('title')</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="w-full">
    <header class="fixed flex justify-between items-center pl-8 pr-8 w-full h-32 bg-primary mb-8">
      <h1 class="text-4xl font-bold text-gray-50">SketchStore</h1> 
    </header>
    <div class="w-2/3 m-auto h-dv flex gap-3 flex-wrap">
      @yield('content')
    </div>
  </div>
</body>
</html>