<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }}</title>
        @vite('resources/css/app.css')
        @livewireStyles
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v1.x.x/dist/livewire-sortable.js"></script>
    </head>
    <body class="h-100">
    @if($errors->any())
        {!! implode('', $errors->all('<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">:message</div>')) !!}
    @endif
        <div class="max-w-3xl mx-auto mt-12">
            {{ $slot }}
        </div>
    </body>
</html>
