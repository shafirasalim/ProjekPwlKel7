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
        <!-- Dashboard -->
        <a href="#" class="flex items-center px-4 py-3 mx-2 my-1 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white transition-all duration-200 group">
            <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <span>Dashboard</span>
            <span class="ml-auto text-xs bg-gray-700 px-2 py-0.5 rounded-full">New</span>
        </a>
        <!-- Users Management -->
        <a href="#" class="flex items-center px-4 py-3 mx-2 my-1 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white transition-all duration-200 group">
            <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
            <span>Users</span>
            <span class="ml-auto text-xs bg-blue-600 px-2 py-0.5 rounded-full">8</span>
        </a>
</aside>