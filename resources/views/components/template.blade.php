<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chronos Blog</title>
  @vite('resources/css/app.css')
</head>
<body>
    <x-navbar></x-navbar>
    <div class='container m-auto p-5 rounded-md flex justify-center'>
        <div class='block w-1/2 border-gray-500 border-2 p-5 rounded-md'>
            {{$slot}}
        </div>
    </div>
</body>
</html>