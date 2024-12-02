<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/Boostrap.css">
</head>
<body style="font-family: Arial, sans-serif;margin: 20px;">
    <div>
        <x-navbar></x-navbar>
    </div>
    {{ $slot }}
</body>
</html>
