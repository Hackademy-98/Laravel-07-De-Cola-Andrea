<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <x-navbar/>
    {{$slot}}
    <x-footer/>
</body>
<!-- script fontawesome -->
<script src="https://kit.fontawesome.com/641d9b841b.js" crossorigin="anonymous"></script>
</html>