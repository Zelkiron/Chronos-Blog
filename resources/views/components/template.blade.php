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
    <div class='container m-auto p-5 border-gray-500 border-2 rounded-md flex'>
        <div class='block'>
            {{$slot}}
        </div>
    </div>
</body>
</html>