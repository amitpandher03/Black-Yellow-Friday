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
    @if (session('success'))
        <x-alert type="success" :message="session('success')" />
    @elseif (session('error'))
        <x-alert type="error" :message="session('error')" />
    @elseif (session('warning'))
        <x-alert type="warning" :message="session('warning')" />
    @elseif (session('info'))
        <x-alert type="info" :message="session('info')" />
    @endif
    
    <main>
        {{ $slot }}
    </main>
    <x-footer />
</body>
</html>