<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Friday</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body data-theme="blackfriday">

    @if (session()->has('success'))
        <div data-flash-message="{{ session('success') }}" style="display: none;"></div>
    @endif
   
    @if (session()->has('error'))
        <div data-flash-message="{{ session('error') }}" style="display: none;"></div>
    @endif
   
    @if (session()->has('warning'))
        <div data-flash-message="{{ session('warning') }}" style="display: none;"></div>
    @endif
   
    @if (session()->has('info'))
        <div data-flash-message="{{ session('info') }}" style="display: none;"></div>
    @endif


    <x-navbar />
    
    <main>
        {{ $slot }}
    </main>
    <x-footer />
</body>
</html>