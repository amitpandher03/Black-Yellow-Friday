<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Friday</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body data-theme="blackfriday">
    <x-navbar />
    <main>
        {{ $slot }}
    </main>
    <x-footer />
</body>
</html>