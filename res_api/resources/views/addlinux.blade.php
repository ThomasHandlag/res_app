<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }
    </style>
</head>

<body class="antialiased">
    <div class="container mx-auto bg-slate-500">
        <h1 class="text-3xl font-semibold mb-6">Add Data</h1>

        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('/store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" class="border rounded w-full py-2 px-3" required>
            </div>

            <div class="mb-4">
                <label for="masv" class="block text-gray-700 text-sm font-bold mb-2">MASV:</label>
                <input type="text" name="masv" id="masv" class="border rounded w-full py-2 px-3" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Add Data</button>
        </form>
    </div>
</body>
</html>
