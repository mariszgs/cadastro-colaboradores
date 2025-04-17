<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">

    <header class="p-4 bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
        <h1>{{ config('app.name', 'Laravel') }}</h1>
    </header>

    <main class="p-6">
        {{ $header ?? '' }}

        <div class="mt-6">
            {{ $slot }}
        </div>
    </main>

</body>
</html>
