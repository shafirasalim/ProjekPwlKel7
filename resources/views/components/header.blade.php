<header class="bg-white shadow-md">
    <div class="flex items-center justify-between px-6 py-4">
        
        <!-- Left: Logo / Title -->
        <div class="flex items-center space-x-3">
            <button class="md:hidden text-gray-600 focus:outline-none">
                ☰
            </button>
            <h1 class="text-xl font-bold text-gray-800">
                Admin Panel
            </h1>
        </div>

        <!-- Right: User Menu -->
        <div class="flex items-center space-x-4">
            
            <!-- Notification -->
            <button class="relative text-gray-600 hover:text-gray-800">
                🔔
                <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
            </button>

            <!-- User Dropdown -->
            <div class="relative group">
                <button class="flex items-center space-x-2 focus:outline-none">
                    <img 
                        src="https://i.pravatar.cc/40" 
                        class="w-8 h-8 rounded-full"
                        alt="User"
                    >
                    <span class="text-gray-700">Admin</span>
                </button>

                <!-- Dropdown -->
                <div class="absolute right-0 mt-2 w-40 bg-white border rounded-md shadow-lg hidden group-hover:block">
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-100">Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>