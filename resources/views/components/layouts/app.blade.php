<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title', 'Dashboard')</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-black">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <x-layouts.sidebar />
        
        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <x-layouts.header />
            
            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>