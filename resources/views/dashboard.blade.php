<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="flex min-h-screen">
        <x-layouts.sidebar />
        
        <div class="flex-1 flex flex-col">
            <x-layouts.header />
            <main class="flex-1 bg-black p-6">
                <h1 class="text-white text-2xl">Dashboard</h1>
                <p class="text-gray-400">Sidebar + Header sudah muncul!</p>
            </main>
        </div>
    </div>
</body>
</html>