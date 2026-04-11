{{-- resources/views/components/layouts/sidebar.blade.php --}}
<aside class="bg-gradient-to-b from-gray-900 to-gray-800 text-white w-72 min-h-screen flex-shrink-0 transition-all duration-300 shadow-xl">
    <!-- Logo / Brand -->
    <div class="p-5 border-b border-gray-700">
        <div class="flex items-center justify-center space-x-2">
            <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
            </div>
            <div>
                <h2 class="text-xl font-bold">AdminPanel</h2>
                <p class="text-xs text-gray-400">Version 1.0</p>
            </div>
        </div>
    </div>   
    <!-- User Info -->
    <div class="p-4 border-b border-gray-700">
        <div class="flex items-center space-x-3">
            <img src="https://ui-avatars.com/api/?name=Admin&background=3b82f6&color=fff&rounded=true&size=40" alt="Avatar" class="w-10 h-10 rounded-full">
            <div>
                <p class="font-semibold">Admin User</p>
                <p class="text-xs text-gray-400">Super Administrator</p>
            </div>
        </div>
    </div>
  <!-- Main Navigation -->
    <nav class="flex-1 py-4">
        <div class="px-4 mb-2">
            <p class="text-xs text-gray-400 uppercase tracking-wider font-semibold">Main Menu</p>
        </div>
</aside>