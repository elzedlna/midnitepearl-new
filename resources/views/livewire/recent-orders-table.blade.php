<div class="bg-white border border-gray-200">
    <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
        <h3 class="font-semibold text-gray-800">Recent Orders</h3>
        <a href="#" class="text-sm text-teal-600 hover:text-teal-700">View All</a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Items</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Payment</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($orders as $order)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $order['id'] }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $order['customer_name'] }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                        {{ \Carbon\Carbon::parse($order['date'])->format('M d, Y') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $order['items'] }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                        RM {{ number_format($order['total'], 2) }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($order['status'] === 'pending')
                            <span class="px-2 py-1 text-xs font-medium text-yellow-700 bg-yellow-100 rounded-full">Pending</span>
                        @elseif($order['status'] === 'processing')
                            <span class="px-2 py-1 text-xs font-medium text-blue-700 bg-blue-100 rounded-full">Processing</span>
                        @elseif($order['status'] === 'shipped')
                            <span class="px-2 py-1 text-xs font-medium text-purple-700 bg-purple-100 rounded-full">Shipped</span>
                        @elseif($order['status'] === 'delivered')
                            <span class="px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">Delivered</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($order['payment_status'] === 'paid')
                            <span class="px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">Paid</span>
                        @else
                            <span class="px-2 py-1 text-xs font-medium text-red-700 bg-red-100 rounded-full">Pending</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <button class="text-teal-600 hover:text-teal-800 font-medium">View</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
