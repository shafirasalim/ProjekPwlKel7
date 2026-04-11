<x-layouts.app>
    @section('title', 'Dashboard')
    

    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white mb-2">Welcome back, Admin!</h1>
        <p class="text-gray-400">Here's what's happening with your store today.</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <x-cards.stat-card title="Total Users" value="1,234" icon="users" color="cyan" />
        <x-cards.stat-card title="Total Products" value="567" icon="products" color="blue" />
        <x-cards.stat-card title="Transactions" value="4,567" icon="transactions" color="green" />
        <x-cards.stat-card title="Revenue" value="$12,345" icon="revenue" color="purple" />
    </div>

    <!-- Recent Transactions -->
    <x-cards.dashboard-card title="Recent Transactions">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="text-left text-gray-400 border-b border-gray-800">
                        <th class="pb-3">ID</th>
                        <th class="pb-3">Customer</th>
                        <th class="pb-3">Product</th>
                        <th class="pb-3">Amount</th>
                        <th class="pb-3">Status</th>
                    </tr>
                </thead>
                <tbody class="text-gray-300">
                    <tr class="border-b border-gray-800">
                        <td class="py-3">#001</td>
                        <td class="py-3">John Doe</td>
                        <td class="py-3">Product A</td>
                        <td class="py-3">$150</td>
                        <td class="py-3">
                            <span class="px-2 py-1 bg-green-500/20 text-green-400 rounded-full text-xs">Completed</span>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-800">
                        <td class="py-3">#002</td>
                        <td class="py-3">Jane Smith</td>
                        <td class="py-3">Product B</td>
                        <td class="py-3">$250</td>
                        <td class="py-3">
                            <span class="px-2 py-1 bg-yellow-500/20 text-yellow-400 rounded-full text-xs">Pending</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="mt-6 text-right">
            <x-buttons.primary-button color="cyan">
                View All Transactions
            </x-buttons.primary-button>
        </div>
    </x-cards.dashboard-card>
</x-layouts.app>